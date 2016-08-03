<?php
/**
 * Created by PhpStorm.
 * User: bilal_ashraf
 * Date: 7/26/16
 * Time: 2:09 AM
 */
class Controller
{
    public function model($model){

        require_once '../app/models/' .$model. '.php';

        return new $model();
        //echo $model;

    }

    public function view($view, $data = [])
    {
        require_once '../app/views/' .$view. '.php';
    }
}