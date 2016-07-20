<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/14/16
 * Time: 3:08 PM
 */
ini_set("display_errors",1);

require_once "ShapeInterface.php";
require_once "FourSidedShapesFactory.php";
require_once "OtherShapesFactory.php";


 $fourSidedFactory = new FourSidedShapesFactory();

 $shape=$fourSidedFactory->createShape("square");

 if($shape!=null)
   $shape->draw();
 else
    echo "invalid type ". "\n";
$otherFactory = new OtherShapesFactory();

$shape=$otherFactory->createShape("circle");
if($shape!=null)
    $shape->draw();
else
    echo "invalid type ". "\n";