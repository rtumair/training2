<?php
namespace Arithmetic;
class Arithmetic
{
    public function multiplication($a, $b)
    {
        $result = $a * $b;
        return $result;
    }
    public function addition($a, $b)
    {
        $result= $a + $b;
        return $result;
    }
    public function subtraction($a, $b)
    {
        $result = $a - $b;
        return $result;
    }
    public function division($a, $b)
    {
        $result = $a  / $b;
        return $result;
    }
}