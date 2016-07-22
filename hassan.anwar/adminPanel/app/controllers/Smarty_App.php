<?php

/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/22/16
 * Time: 11:35 AM
 */

require_once('/var/www/html/adminPanel/app/Smarty/Smarty.class.php');

class Smarty_App extends Smarty
{

    public function addParams($key, $value)
    {
        $this->assign($key, $value);
    }

    public function render($controller, $view)
    {
        $path='/var/www/html/adminPanel/app/views/';

        $this->display($path.$controller.'/'.$view.'.tpl');
    }
}