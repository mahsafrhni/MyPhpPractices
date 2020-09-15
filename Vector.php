<?php

class Vector
{
    public $x;
    public $y;
    public $z;

    public function __construct($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function magnitude()
    {
        // Implement magnitude method here
    }

    public function add($vector)
    {
        // Implement add method here
    }

    public function subtract($vector)
    {
        // Implement subtract method here
    }

    public function product($n)
    {
        // Implement product method here
    }

    public function dotProduct($vector)
    {
        // Implement dotProduct method here
    }

    public function crossProduct($vector)
    {
        // Implement crossProduct method here
    }
}