<?php

/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/25/16
 * Time: 9:50 AM
 */
require_once ('../app/controllers/SmartyApp.class.php');
class ViewManager
{
    public $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty_MyApp();
    }
    public function addParams($key, $value)
    {
        $this -> smarty -> addParams($key, $value);
    }
    public function render ($view, $controller)
    {
        $this->smarty->render($view, $controller);
    }
}