<?php
/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/14/16
 * Time: 4:02 PM
 */

namespace Patterns;

require_once "Helicopter.php";
require_once "Car.php";
require_once "Gun.php";

class ToyFactory
{
    public function produceToy($toyName) {
        $toy = null;
        if ('Car'==$toyName) {
            $toy = new Car();
        } else if ('Helicopter'==$toyName) {
            $toy = new Helicopter();
        } else if ('Gun'==$toyName) {
            $toy = new Gun();
        }

        return $toy;
    }
}