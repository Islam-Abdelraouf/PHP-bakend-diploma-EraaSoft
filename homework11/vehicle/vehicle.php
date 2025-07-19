<?php

class Vehicle
{
    public $color;
    public $wheels;
    public $doors;

    public function uploadImage()
    {
        echo "image uploaded successfully.";
    }
    public function isGoodForRain()
    {
        return true;
    }
}
