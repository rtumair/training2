<?php

/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/25/16
 * Time: 9:43 AM
 */
class SmartyApp extends Smarty
{
    function __contruct()
    {
        parent::__contruct();

    }

    function render ($view, $controlller)
    {
        if ($view == 'login')
        {
            $this-> display(('../app/views/layouts'. $view. '.tpl'));
        } else {
            $this-> display('../app/views/'. $controlller. '/'.$view.'tpl');
        }
    }

    function addParams($key, $value)
    {
        $this->assign($key,$value);
    }
}