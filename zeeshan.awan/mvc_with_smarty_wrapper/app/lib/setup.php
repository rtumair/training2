<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/22/16
 * Time: 1:13 PM
 */

class Smarty_MyApp extends Smarty
{
    public function __construct()
    {
        parent::__construct();
    }


    function render($controller,$view,$layout = 'page'){



        $this->display('../app/views/' .$controller.'/'.$view .'.tpl');

    }

    function addParams($key, $value)
    {
        $this->assign($key,$value);
    }
}