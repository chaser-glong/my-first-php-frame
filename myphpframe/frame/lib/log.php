<?php
namespace frame\lib;
use frame\lib\config;
class log{
    /**
     * 确定日志存储方式
     * 
     * 写日志
     */
    static $class;
    static public function init()
    {
        //确定存储方式
        $drive = config::get('DRIVE','log');
        $class = '\frame\lib\drive\log\\'.$drive;
        self::$class = new $class;
    }
    static public function log($name,$file= 'log')
    {
        self::$class->log($name,$file);
    }
}