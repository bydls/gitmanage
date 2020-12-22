<?php
/**
 * @Desc:
 * @author: hbh
 * @Time: 2020/12/18   9:04
 */

namespace bydls\git\config;


class config
{
    public static function  projectDir()
    {
        return '/w3c/sp_sites/apis/bppapi';
    }
    public static function  branchPrefix()
    {
        return '';
    }
    public static function  logUrl()
    {
        return '../storage/logs/branch/.log';
    }
}