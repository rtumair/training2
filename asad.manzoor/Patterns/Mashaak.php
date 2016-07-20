<?php
/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/14/16
 * Time: 4:42 PM
 */
require_once "Fighter_Jet.php";

class Mashaak implements Fighter_Jet
{
    public function purchased()
    {
        echo "Mashaak purchased";
    }
}