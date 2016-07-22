<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/15/16
 * Time: 10:52 AM
 */

class Controller
{
    public function model($model)
    {
        require_once '../app/models/'.$model.'.php';
        return new $model();
    }

    public function view ($view, $data=[])
    {
        require_once '../app/views/'.$view.'.tpl';
        
    }
}