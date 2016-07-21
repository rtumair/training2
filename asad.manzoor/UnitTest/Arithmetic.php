<?php
namespace ArithmeticMath;

class ArithmeticMath
{
  
    // method declaration
    public function add($var1, $var2)
    {
        if (is_numeric($var1) && is_numeric($var2)) {
            return $var1 + $var2;
        } elseif (!is_numeric($var1)) {
            echo "$var1 is not a numerical value";
        } else {
            echo "$var2 is not a numerical value";
        }
    }

    public function subtract($var1, $var2)
    {
        if (is_numeric($var1) && is_numeric($var2)) {
            return $var1 - $var2;
        } elseif (!is_numeric($var1)) {
            echo "$var1 is not a numerical value";
        } else {
            echo "$var2 is not a numerical value";
        }
    }

    public function multiply($var1, $var2)
    {
        if (is_numeric($var1) && is_numeric($var2)) {
            return $var1 * $var2;
        } elseif (!is_numeric($var1)) {
            echo "$var1 is not a numerical value";
        } else {
            echo "$var2 is not a numerical value";
        }
    }

    public function divide($var1, $var2)
    {
        if (is_numeric($var1) && is_numeric($var2)) {
            return $var1 / $var2;
        } elseif (!is_numeric($var1)) {
            echo "$var1 is not a numerical value";
        } else {
            echo "$var2 is not a numerical value";
        }
    }
}
