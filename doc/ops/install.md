## 机器初始化步骤
#### 步骤一
* 修改root账号密码
```
## 随机生成密码
passwd root
```
* 增加root ssh key 登录方式（选做）

#### 步骤二
* 增加用户www （该用户代码部署和管理的）
```
## 添加www用户
useradd www
## 设置www 密码
passwd www
## 选做 ，设置ssh key登录
```

#### 步骤三
* 设置相关目录
```
mkdir /data
cd /data && mkdir logs vhosts www
cd /data/logs && mkdir jobs nginx
## 以下选做，是集团后台系统所需目录
mkdir -p /data/www/logs/jobs/queue/logs
mkdir -p /data/www/logs/jobs/queue/pids
mkdir -p /data/www/corp.hsh568.cn
mkdir -p /data/www/corp.hsh568.cn/keys
mkdir -p /data/www/release_version
```

* 赋予权限
```
# data目录给www用户
chown -R www:www /data
chown -R root:root /data/logs
chown -R root:root /data/vhosts
```

#### 步骤四
* 安装git 和 辅助软件
```
yum install -y git  bash-completion vim
```
* 安装nginx
```
rpm -Uvh http://nginx.org/packages/centos/7/noarch/RPMS/nginx-release-centos-7-0.el7.ngx.noarch.rpm
yum install -y nginx
## 设置开机自动启
chkconfig nginx  on
```
* 安装php相关
```
yum install epel-release -y
rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
yum clean all && yum makecache
yum -y install php72w php72w-cli php72w-fpm php72w-common php72w-devel php72w-embedded php72w-gd php72w-mbstring php72w-mysqlnd  php72w-opcache php72w-pdo php72w-xml php72w-pecl-redis.x86_64
```
* 安装mysql
```
rpm -Uvh  https://dev.mysql.com/get/mysql80-community-release-el7-3.noarch.rpm
### mysql client
yum install -y mysql-community-client
### mysql server
yum install -y mysql-community-server
```
* 安装redis server
```
yum install -y redis
#设置开机自启动
chkconfig redis on
```
#### 步骤五 配置Mysql服务
* 找到mysql 服务的临时密码
```
service mysqld start
cat /var/log/mysqld.log |grep pass
```
* 更改root账号密码
```
## 需要使用临时密码
mysql -uroot -p
ALTER USER 'root'@'localhost' IDENTIFIED BY 'new password';
```
* 设置数据库的验证方式（php7.4 就是用的是caching_sha2_password，所以千万不要随意升级到php7.4）
```
ALTER USER "root"@"localhost"  IDENTIFIED WITH mysql_native_password BY "你设置的密码";
FLUSH PRIVILEGES;
```
#### 步骤六 配置Redis
```
## redis增加认证密码
vim /etc/redis.conf
找到 #requirepass foobared  把requirepass前面的#和空格去掉，把 foobared  改为自己想写的密码比如123
重启服务器，就可以了
```
#### 额外配置
* 关闭selinux 防火墙

```
getenforce 这个命令可以查看当前是否开启了selinux 如果输出 disabled 或 permissive 那就是关闭了
如果输出 enforcing 那就是开启了 selinux

1、临时关闭selinux
setenforce 0 ##设置SELinux 成为permissive模式
setenforce 1 ##设置SELinux 成为enforcing模式

2、永久关闭selinux
修改/etc/selinux/config 文件
将SELINUX=enforcing改为SELINUX=disabled
重启系统即可
```

#### 参考
* 相关命令操作

```
service nginx start | stop | restart | reload
service php-fpm start | stop | restart | reload
service mysqld start | stop | restart | reload
```