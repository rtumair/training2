<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 2:10 PM
 */
class Controller
{
    public function model($model)
    {
       // echo $model;
        require_once '../app/models/'. $model. '.php';
        return new $model();
    }

    /**
     * @param $view
     * @param $data
     */
    public function view($view, $data = [])
    {
        require_once '../app/views/' .$view.'.php';
    }
}