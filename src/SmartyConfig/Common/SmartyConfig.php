<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/xn-share-config/src/SmartyConfig/Xn',
            S_ROOT.'vendor/qixinyun/xn-share-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/xn-share-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
