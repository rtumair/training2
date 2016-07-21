<?php

require_once "Fighter_Jet.php";

class Miraag implements Fighter_Jet
{
    public function purchased()
    {
        echo "Miraag purchased";
    }
}