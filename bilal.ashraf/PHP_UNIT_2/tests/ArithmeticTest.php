<?php

namespace foo;

include_once "/home/zeeshan.awan/Desktop/bilal/PHP_UNIT_2/src/Arithmetic.php";
use PHPUnit_Framework_TestCase as TestCase;

class ArithmeticTest extends TestCase
{
    public function testAdd()
    {
        $obj = new Arithmetic;
        $this->assertEquals(3,$obj->add(1,2));
    }

    public function testsubtract()
    {
        $obj = new Arithmetic;
        $this->assertEquals(-1,$obj->subtract(1,2));
    }

    public function testmultiply()
    {
        $obj = new Arithmetic;
        $this->assertEquals(2,$obj->multiply(1,2));
    }

    public function testDivide()
    {
        $obj = new Arithmetic;
        $this->assertEquals(2,$obj->divide(4,2));
    }
}

