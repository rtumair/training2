<?php
/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/14/16
 * Time: 3:58 PM
 */

namespace Patterns;

require_once "Toy.php";

class Helicopter implements Toy
{
    public function produceToy()
    {
        echo "Helicopter Produced.";
    }
}