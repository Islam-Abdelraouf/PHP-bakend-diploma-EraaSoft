<?php

class Car extends Vehicle
{
    public $wheels = 4;
    public $doors = 4;
    public $convertible = false;

    public function isGoodForRain()
    {
        return ! $this->convertible;
    }
}
