<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/14/16
 * Time: 2:55 PM
 */
require_once "ShapeFactory.php";
require_once "Square.php";
require_once "Rectangle.php";

class FourSidedShapesFactory extends ShapeFactory
{

    function createShape($type){

        if ($type == "square")
            return new Square();
        else if ($type == "rectangle") {
            return new Rectangle();
        } else {
            return null;
        }
    }


}