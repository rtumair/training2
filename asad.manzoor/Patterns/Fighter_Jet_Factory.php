<?php
/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/14/16
 * Time: 4:06 PM
 */
require_once "JF17Thunder.php";
require_once "Mashaak.php";
require_once "Miraag.php";

class Fighter_Jet_Factory {

    //use getShape method to get object of type shape
    public function get_Purchase_Order($shapeType)
    {
        
        if(strcasecmp($shapeType,'JF17 Thunder')==0){
           $Fighter_Jet_Factory = new Thunder();
        } elseif(strcasecmp($shapeType,'Miraag')==0){
            $Fighter_Jet_Factory = new Miraag();
        } else if(strcasecmp($shapeType, "Mashaak") == 0){
            $Fighter_Jet_Factory =  new Mashaak();
        }
        return $Fighter_Jet_Factory;
    }
}