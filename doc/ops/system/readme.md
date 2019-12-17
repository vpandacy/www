# 服务器有哪些设置
#### 基础软件安装
* 安装git
    *  yum -y install git
* 命令补全
    * yum -y install bash-completion
    * yum -y install bash-completion-extras

* 安装php7以上
```
设置源
yum install epel-release -y
rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm

安装扩展包
yum -y install php72w php72w-cli php72w-fpm php72w-common php72w-devel php72w-embedded php72w-gd php72w-mbstring php72w-mysqlnd php72w-opcache php72w-pdo php72w-xml
```

#### 初始化新用户
* useradd vsftpd
* 不设置密码

#### 常用服务设置为开机自启动
* nginx

```
  # systemctl start nginx.service　         启动nginx服务
  # systemctl stop nginx.service　          停止服务
  # systemctl restart nginx.service　       重新启动服务
  # systemctl list-units --type=service     查看所有已启动的服务
  # systemctl status nginx.service          查看服务当前状态
  # systemctl enable nginx.service          设置开机自启动
  # systemctl disable nginx.service         停止开机自启动
```

#### 参考文章
* [Centos7Yum安装PHP7.2](https://www.cnblogs.com/lamp01/p/10101659.html)