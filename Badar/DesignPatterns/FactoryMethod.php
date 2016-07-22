<?php

/**
 * Created by PhpStorm.
 * User: muhammad.badar
 * Date: 7/22/16
 * Time: 12:05 PM
 */
abstract class Toy {
    public $name  = '';
    public $price  = 0;

    public function prepare() {
        echo $this->name. ' is prepared';
    }

    public function package() {
        echo $this->name. ' is packaged';
    }

    public function label(){
        echo $this->name . ' is priced at '.$this->price;
    }
}

class Car extends Toy {
    public $name  = 'Car';
    public $price = 20;
}

class Helicopter extends Toy {
    public $name  = 'Helicopter';
    public $price = 100;
}


abstract class ToysFactory {

    public function produceToy($toyName) {
        $toy = null;
        $toy = $this->createToy($toyName);
        //$toy->prepare();
        //$toy->package();
        //$toy->label();
        return $toy;
    }

    abstract public function createToy($toyName);
}

class NyToysFactory extends ToysFactory {


    public function createToy($toyName) {
        $toy = new Car();
        echo'inside factory check'."<br>";

        if ('car'==$toyName) {
            $toy = new Car();
            echo'inside if check'."<br>";
        } else if ('helicopter'==$toyName) {
            $toy = new Helicopter();
        }

        return $toy;
    }
}

class CaToysFactory extends ToysFactory {

    public function createToy($toyName) {
        $toy = null;

        if ('car'==$toyName) {
            $toy = new Car();

        } else if ('helicopter'==$toyName) {
            $toy = new Helicopter();
        }

        return $toy;
    }
}

echo 'new object check '."<br>";


$obj = new NyToysFactory();

var_dump($obj);

$toy = $obj->createToy('car');

echo 'check car '."<br>";

var_dump($toy);


$toy = $obj->createToy('helicopter');

echo 'check helicopter '."<br>";

var_dump($toy);
