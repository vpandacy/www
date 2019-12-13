<?php

namespace common\components\helper;

use  yii\helpers\Html;

class UtilHelper
{
    /**
     * 转移特殊字符
     */
    public static function encode($dispaly_text)
    {
        return Html::encode($dispaly_text);
    }


    public static function encrypted($txt)
    {
        $tmp_salt = "BZUmBW073RwGXhk9";
        return md5(md5($tmp_salt . $txt));
    }

    /**
     *分页
     */
    public static function ipagination($params)
    {
        $ret = [
            'previous' => true,
            'next' => true,
            'from' => 0,
            'end' => 0,
            'total_page' => 0,
            'current' => 0,
            'page_size' => intval($params['page_size'])
        ];
        $total = (int)$params['total_count'];
        $pageSize = (int)$params['page_size'];
        $page = (int)$params['page'];
        $display = (int)$params['display'];
        $totalPage = (int)ceil($total / $pageSize);
        $totalPage = $totalPage ? $totalPage : 1;

        if ($page <= 1) {
            $ret['previous'] = false;
        }
        if ($page >= $totalPage) {
            $ret['next'] = false;
        }
        $semi = (int)ceil($display / 2);
        if ($page - $semi > 0) {
            $ret['from'] = $page - $semi;
        } else {
            $ret['from'] = 1;
        }
        if ($page + $semi <= $totalPage) {
            $ret['end'] = $page + $semi;
        } else {
            $ret['end'] = $totalPage;
        }
        $ret['total_count'] = $total;
        $ret['total_page'] = $totalPage;
        $ret['current'] = $page;
        return $ret;
    }

    /**
     * 获取客户端IP
     */
    public static function getClientIP()
    {
        if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            return $_SERVER["HTTP_X_FORWARDED_FOR"];
        }
        return isset($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : '';
    }


    /**
     * 判断是pc 还是 手机
     */
    public static function isPC()
    {
        $ug = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
        $clientkeywords = array(
            'nokia',
            'sony',
            'ericsson',
            'mot',
            'samsung',
            'htc',
            'sgh',
            'lg',
            'sharp',
            'sie-',
            'philips',
            'panasonic',
            'alcatel',
            'lenovo',
            'iphone',
            'ipod',
            'blackberry',
            'meizu',
            'android',
            'netfront',
            'symbian',
            'ucweb',
            'windowsce',
            'palm',
            'operamini',
            'operamobi',
            'opera mobi',
            'openwave',
            'nexusone',
            'cldc',
            'midp',
            'wap',
            'mobile'
        );
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", $ug)
            && strpos($ug, 'ipad') === false) {
            return false;
        }
        return true;
    }

    /**
     * 判断是否在微信
     */
    public static function isWechat()
    {
        $ug = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
        if (stripos($ug, 'micromessenger') !== false) {
            return true;
        }
        return false;
    }

    public static function getRootPath()
    {
        $vendor_path = \Yii::$app->vendorPath;
        return dirname($vendor_path);
    }

    /**
     * 检测链接是否是SSL连接
     * @return bool
     */
    public static function is_SSL()
    {
        if (!isset($_SERVER['HTTPS'])) {
            return false;
        }
        if ($_SERVER['HTTPS'] === 1) {  //Apache
            return true;
        } else {
            if ($_SERVER['HTTPS'] === 'on') { //IIS
                return true;
            } elseif ($_SERVER['SERVER_PORT'] == 443) { //其他
                return true;
            }
        }
        return false;
    }

    /*遮住几位*/
    public static function maskStr($string, $from = 3, $len = 4, $mask_char = '*')
    {
        $mask_str = mb_substr($string, 0, $from);
        $strlen = mb_strlen($string, 'UTF-8');
        if ($from + $len >= $strlen) {
            $mask_str .= str_repeat($mask_char, ($strlen - $from) >= 0 ? ($strlen - $from) : 0);
        } else {
            $mask_str .= str_repeat($mask_char, $len) . mb_substr($string, ($from + $len));
        }
        return $mask_str;
    }

    public static function genePass($s_options, $length = 16)
    {
        $options = [
            1 => "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
            2 => "!@#$%^&*"
        ];
        $chars = "";
        foreach ($s_options as $_option) {
            $chars .= $options[$_option];
        }

        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[mt_rand(0, strlen($chars) - 1)];
        }

        return $password;
    }

    /*
     * UUID是指在一台机器上生成的数字，它保证对在同一时空中的所有机器都是唯一的。通常平台 会提供生成UUID的API。UUID按照开放软件基金会(OSF)制定的标准计算，用到了以太网卡地址、纳秒级时间、芯片ID码和许多可能的数字。由以 下几部分的组合：当前日期和时间(UUID的第一个部分与时间有关，如果你在生成一个UUID之后，过几秒又生成一个UUID，则第一个部分不同，其余相 同)，时钟序列，全局唯一的IEEE机器识别号（如果有网卡，从网卡获得，没有网卡以其他方式获得），UUID的唯一缺陷在于生成的结果串会比较长。关于 UUID这个标准使用最普遍的是微软的GUID(Globals Unique Identifiers)。
在ColdFusion中可以用CreateUUID()函数很简单的生成UUID，其格式为：xxxxxxxx-xxxx-xxxx- xxxxxxxxxxxxxxxx(8-4-4-16)，其中每个 x 是 0-9 或 a-f 范围内的一个十六进制的数字。而标准的UUID格式为：xxxxxxxx-xxxx-xxxx-xxxxxx-xxxxxxxxxx (8-4-4-4-12)
     * */
    public static function geneUUID()
    {
        if (function_exists('com_create_guid')) {
            return com_create_guid();
        }

        mt_srand((double)microtime() * 10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = chr(123)// "{"
            . substr($charid, 0, 8) . $hyphen
            . substr($charid, 8, 4) . $hyphen
            . substr($charid, 12, 4) . $hyphen
            . substr($charid, 16, 4) . $hyphen
            . substr($charid, 20, 12)
            . chr(125);// "}"
        return $uuid;
    }


    public static function parseUrlPath($url = ''){
        $parse_url = parse_url(urldecode($url));
        if(empty($parse_url['path']))return [];
        $path = trim(trim($parse_url['path']),'/');
        return explode('/',$path);
    }


    /*
     * 判断ip
     * */
    public static function isIpInNetwork($network = [],$ip = '')
    {
        if (empty($network)) {
            return false;
        }
        $ip = $ip ?? self::getClientIP();
        $ip = (double)(sprintf("%u", ip2long($ip)));
        if (is_array($network)) {
            foreach ($network as $v) {
                if ($v == '127.0.0.1') {
                    return true;
                }
                $s = explode('/', $v);
                $network_start = (double)(sprintf("%u", ip2long($s[0])));
                $network_len = pow(2, 32 - $s[1]);
                $network_end = $network_start + $network_len - 1;
                if ($ip >= $network_start && $ip <= $network_end) {
                    return true;
                }
            }
            return false;
        } else {
            $s = explode('/', $network);
            $network_start = (double)(sprintf("%u", ip2long($s[0])));
            $network_len = pow(2, 32 - $s[1]);
            $network_end = $network_start + $network_len - 1;
            if ($ip >= $network_start && $ip <= $network_end) {
                return true;
            }
            return false;
        }
    }


}