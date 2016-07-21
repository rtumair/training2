<?php
/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/14/16
 * Time: 4:50 PM
 */
require_once "Fighter_Jet_Factory.php";

$Client = new Fighter_Jet_Factory();

$jet = $Client->get_Purchase_Order("Miraag");
if($jet){
    $jet->purchased();
} else{
   echo "error";
}
