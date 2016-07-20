<?php

/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/15/16
 * Time: 10:35 AM
 */
class Controller
{
    public function model($model)
    {
        if($model)
        {
            require_once '../app/models/'.$model.'.php';
            return new $model();
        }

    }

    //$view contains required view path & $data contains data to be displayed
    public function view($view, $data = [])
    {
        if($view)
        {
            require_once '../app/views/'.$view.'.php';
        }

    }

   
}