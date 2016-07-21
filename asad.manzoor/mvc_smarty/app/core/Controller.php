<?php
/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/15/16
 * Time: 11:32 AM
 */
class Controller
{
    
    
    public function model($model)
    {
        require_once '../app/models/'.$model.'.php';

        return new $model();
    }

    public function view($view, $data =[])
    {

        require_once ('../app/views/'.$view.'.php');
    }
}