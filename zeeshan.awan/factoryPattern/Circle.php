<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/14/16
 * Time: 2:48 PM
 */


class Circle implements ShapeInterface
{

    protected $color;

    public function setColor($rgb)
    {
        $this->color = $rgb;
    }

    public function draw()
    {
        echo "Drawing Circle"."\n";
    }
}