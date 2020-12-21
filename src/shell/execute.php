<?php
/**
 * @Desc:
 * @author: hbh
 * @Time: 2020/12/18   9:26
 */

namespace bydls\git\shell;


use bydls\Exception;
use bydls\git\config;
use bydls\git\Log\Log;
use bydls\git\Log\Logger;
use bydls\Utils;

class execute
{
    public $shell;
    public $result;
    public $log_type;

    public function __construct(string $shell, int $log_type)
    {
        if (!$shell) throw new Exception("Shell  Not Exist!");
        $this->shell = $shell;
        $this->log_type = $log_type;
        exec($this->shell, $this->result);
    }

    public function getResult()
    {
        if(!empty(config::logUrl())){
            $logger = new Logger();
            $logger->setConfig(['file'=>config::logurl()]);
            Log::setInstance($logger);
        }
        switch ($this->log_type) {
            case 1:
                Log::info('【git分支操作】：', ['ip' => Utils::getIPAddress(), 'shell' => $this->shell,'result'=>json_encode($this->result)]);
                break;
            case 2:
                Log::info('【git标签操作】：', ['ip' => Utils::getIPAddress(), 'shell' => $this->shell,'result'=>json_encode($this->result)]);
                break;
        }
        return $this->result;
    }
    

}