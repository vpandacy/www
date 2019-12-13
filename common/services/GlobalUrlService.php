<?php

namespace common\services;

use common\components\helper\StaticAssetsHelper;
use common\components\helper\UtilHelper;
use yii\helpers\Url;

class GlobalUrlService
{
    /**
     * Author: apanly
     * 获取static cdn目录的静态资源，css 和  js
     * @param $path
     * @param array $params
     */
    public static function buildStaticUrl($path, $params = [])
    {
        $static_config = \Yii::$app->params['domains']['static'];
        $switch        = $static_config['cdn']['switch'];
        if ($switch) {
            if (UtilHelper::is_SSL()) {
                $domain = $static_config['cdn']['domain_https'];
            } else {
                $domain = $static_config['cdn']['domain'];
            }

        } else {
            $domain = $static_config['domain'];
            if (stripos($domain, "http") === false) {
                $domain = "http:" . $domain;
            }
        }
        $path = Url::toRoute(array_merge([$path], $params));
        return $domain . $path;
    }

    /**
     * Author: apanly
     * 获取static cdn目录的静态图片
     * @param $path
     * @param array $params
     */
    public static function buildStaticPicUrl($path, $params = [])
    {
        $url    = self::buildStaticUrl($path, $params);
        $weight = isset($params['w']) ? $params['w'] : 0;
        $height = isset($params['h']) ? $params['h'] : 0;
        if (!$height && !$weight) {
            return $url;
        }

        $static_config = \Yii::$app->params['domains']['static'];
        $switch        = $static_config['cdn']['switch'];
        if (!$switch) {
            return $url;
        }
        if ($height && $weight) {
            $url .= "?imageView2/1/w/{$weight}/h/{$height}/interlace/1";
        } else {
            if ($weight) {
                $url .= "?imageView/2/w/{$weight}";
            } else {
                if ($height) {
                    $url .= "?imageView/2/h/{$height}";
                }
            }
        }
        return $url;
    }

    /**
     * Author: apanly
     * 获取bucket中存放的静态资源
     * @param $path
     * @param array $params
     * @param string $bucket
     */
    public static function buildBucketUrl($path, $params = [], $bucket = "hsh")
    {
        if (!$bucket || !$path) {
            return false;
        }

        if (UtilHelper::is_SSL()) {
            $domain = \Yii::$app->params['cdn'][$bucket]["https"];
        } else {
            $domain = \Yii::$app->params['cdn'][$bucket]["http"];
        }
        $weight = isset($params['w']) ? $params['w'] : 0;
        $height = isset($params['h']) ? $params['h'] : 0;

        $url = $domain . trim($path);
        if (!$height && !$weight) {
            return $url;
        }

        if ($height && $weight) {
            $url .= "?imageView2/1/w/{$weight}/h/{$height}/interlace/1";
        } else {
            if ($weight) {
                $url .= "?imageView/2/w/{$weight}";
            } else {
                if ($height) {
                    $url .= "?imageView/2/h/{$height}";
                }
            }
        }
        return $url;
    }


    /**
     * Author: apanly
     * 获取bucket中存放的图片资源
     * @param $path
     * @param array $params
     * @param string $bucket
     */
    public static function buildBucketPicUrl($path, $params = [], $bucket = "pic1")
    {
        if (!$bucket || !$path) {
            return false;
        }

        $switch = \Yii::$app->params['domains']['cdn'][$bucket];
        if ($switch) {
            if (UtilHelper::is_SSL()) {
                $domain = \Yii::$app->params['domains']['cdn_' . $bucket . '_https'];
            } else {
                $domain = \Yii::$app->params['domains']['cdn_' . $bucket];
            }

        } else {
            $domain = \Yii::$app->params['domains'][$bucket];
        }
        $weight = isset($params['w']) ? $params['w'] : 0;
        $height = isset($params['h']) ? $params['h'] : 0;

        $url = $domain . $path;
        if (!$height && !$weight) {
            return $url;
        }

        if ($switch) {
            if ($height && $weight) {
                $url .= "?imageView2/1/w/{$weight}/h/{$height}/interlace/1";
            } else {
                if ($weight) {
                    $url .= "?imageView/2/w/{$weight}";
                } else {
                    if ($height) {
                        $url .= "?imageView/2/h/{$height}";
                    }
                }
            }
        } else {
            if ($height && $weight) {
                $url .= "?format=/w/{$weight}/h/{$height}";
            } else {
                if ($weight) {
                    $url .= "?format=/w/{$weight}";
                } else {
                    if ($height) {
                        $url .= "?format=/h/{$height}";
                    }
                }
            }
        }
        return $url;
    }

    /**
     * Author: apanly
     * 获取www官网的url地址
     * @param $uri
     * @param array $params
     */
    public static function buildWWWUrl($uri, $params = [])
    {
        $path   = Url::toRoute(array_merge([$uri], $params));
        $domain = \Yii::$app->params['domains']['www']['domain'];
        if (UtilHelper::is_SSL()) {
            $domain = str_replace("http://", "https://", $domain);
        }
        return $domain . $path;
    }

}
