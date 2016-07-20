<?php
/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/14/16
 * Time: 4:06 PM
 */

namespace Patterns;

require_once "ToyFactory.php";

$toy=new ToyFactory();
$toy=$toy->produceToy("Helicoptter");

if($toy)
    $toy->produceToy();
else
    echo "Invalid Toy";