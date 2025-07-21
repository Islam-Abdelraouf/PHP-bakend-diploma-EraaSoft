<?php


class MotorCycle extends Vehicle
{
    public $wheels = 2;
    public $doors = 0;

    function isGoodForRain()
    {
        return false;
    }
}
