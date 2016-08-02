<?php

/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/25/16
 * Time: 9:43 AM
 */
class ViewManager extends Smarty
{
    function __contruct()
    {
        parent::__construct();

    }

    function render ($view, $controlller)
    {
        if ($view == 'login' || $view == 'index')
        {
            $this-> display(('../app/views/home/'. $view. '.tpl'));
        } else {
            $this-> display('../app/views/'. $view.'.tpl');
        }
    }

    function addParams($key, $value)
    {
        $this->assign($key,$value);
    }
}