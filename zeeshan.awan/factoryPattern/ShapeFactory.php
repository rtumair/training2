<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/14/16
 * Time: 2:56 PM
 */


abstract class ShapeFactory
{

    abstract protected function createShape($type);


    public function create($type)
    {
        $obj = $this->createShape($type);
        $obj->setColor('#f00');
        return $obj;
    }
}