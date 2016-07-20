<?php
/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/14/16
 * Time: 4:01 PM
 */

namespace Patterns;

require_once "Toy.php";

class Car implements Toy
{
    public function produceToy()
    {
        echo "Car Produced.";
    }

}