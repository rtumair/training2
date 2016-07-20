<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/14/16
 * Time: 2:48 PM
 */
require_once "ShapeInterface.php";

class Square implements ShapeInterface
{

    protected $color;

    public function setColor($rgb)
    {
        $this->color = $rgb;
    }

    public function draw()
    {
        echo "Drawing Square"."\n";
    }
}