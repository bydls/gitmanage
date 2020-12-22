<?php
/**
 * @Desc:
 * @author: hbh
 * @Time: 2020/7/18   16:10
 */

namespace bydls\git;

/**
 * @method static config projectDir()
 * @method static config branchPrefix()
 */
class config
{

    public static function __callStatic($method,$params)
    {
        $config = __NAMESPACE__ . '\\localconfig\\config';
        if (class_exists($config)) {

            return call_user_func([$config, $method]);
        }
        $config = 'bydls\\git\\config\\config';
        return call_user_func([$config, $method]);

    }

}