<?php
/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/14/16
 * Time: 3:59 PM
 */

namespace Patterns;

require_once "Toy.php";

class Gun implements Toy
{
    public function produceToy()
    {
        echo "Gun Produced.";
    }
}