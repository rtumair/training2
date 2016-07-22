<?php

Interface StoneInterface
{
    public function check($color);

}

class BlackStone implements StoneInterface
{
    protected $color;

    public function check($color)
    {
        $this->color = $color;
        echo "$this->color \n";
    }
}

class RedStone implements StoneInterface
{
    protected $color;

    public function check($color)
    {
        $this->color = $color;
        echo "$this->color \n";
    }
}

$obj = new RedStone();
$obj -> check(1);


