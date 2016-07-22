<?php

/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/22/16
 * Time: 11:42 AM
 */
include('/var/www/html/mvc/lib/smarty/Smarty.class.php');
class Smarty_app extends Smarty
{

    function __construct()
    {
        Parent::__construct();
    }

    function render($view,$controller)
    {
        $path = '/var/www/html/mvc/app/controllers/'.$controller.'/'.$view;
        //echo $path;
        //exit(0);
        $this->display('/var/www/html/mvc/app/views/'.$controller.'/'.$view);
    }

    function addParams($key,$value)
    {
        $this->assign($key,$value);
    }

}