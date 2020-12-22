<?php
/**
 * @Desc:
 * @author: hbh
 * @Time: 2020/12/18   8:53
 */

namespace bydls\git\shell;


use bydls\Exception;
use bydls\git\base\base;
use bydls\git\git;


/**
 * 
 * @method static getTagList()
 * @method static changeTag($branch)
 * @method static getTagNew()
 * @method static getTagNow()
 * @method static pullTagNew()
 * */
class tag extends base
{

    protected $shell;
    

    public function __call($name, $arguments)
    {
        if (method_exists(shell::class, $name)) {
            $this->shell = call_user_func([shell::class, $name], $arguments[0]??'');
        } else {
            throw new Exception('shell::' . $name . "  Not Exist!");
        }
        return $this->getResult();
    }


    public function _getShell()
    {
        return $this->shell;
    }

    /**获取shell执行结果
     * @return mixed
     * @throws \bydls\Exception
     * @author: hbh
     * @Time: 2020/12/18   10:49
     */
    public function getResult()
    {
        $exec = new execute($this->_getShell(), 1);
        return $exec->getResult();
    }

}