<?php
namespace Addons;

/**
 * Class Addons
 * @package Addons
 * ����
 *
 */
class Addons
{
    private static $_instance = null;

    /*
    |------------------------------------------------------------
    | ��������
    |------------------------------------------------------------
    //��������,ִ������ router , request , Config / Setup
    */
    public static function getInstance($config = []){
        if(!(self::$_instance instanceof self)){
            self::$_instance = new self($config);
        }
        return self::$_instance;
    }


    public  function Run()
    {
        Addons::getInstance()->router()->Run();
    }

    public function Router()
    {
        return $this;
    }


}