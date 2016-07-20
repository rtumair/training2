<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/14/16
 * Time: 2:55 PM
 */
require_once "ShapeFactory.php";
require_once "Circle.php";
require_once "Triangle.php";

class OtherShapesFactory extends ShapeFactory
{

    function createShape($type){

        if ($type == "triangle")
            return new Triangle();
        else if ($type == "circle") {
            return new Circle();
        } else {
            return null;
        }
    }


}