<?php


namespace common\components\helper;


class RmdirHelper
{
    public static function deldir_($dir) {
        //先删除目录下的文件：
        if (!is_dir($dir)){
            return true;
        }

        $dh=opendir($dir);
        while ($file=readdir($dh)) {
            if($file!="." && $file!="..") {
                $fullpath=$dir."/".$file;
                if(is_dir($fullpath)) {
                    self::deldir_($fullpath);
                    self::deldir_($dir);
                    return true;
                } else {
                     unlink($fullpath);
                    return true;
                }
            }
        }

        closedir($dh);
        //删除当前文件夹：
        if(rmdir($dir)) {
            return true;
        } else {
            return false;
        }
    }


}