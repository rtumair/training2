<?php
/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/14/16
 * Time: 4:41 PM
 */
require_once "Fighter_Jet.php";

class Thunder implements Fighter_Jet
{
    public function purchased()
    {
        echo "JF-17 Thunder purchased";
    }
}