<?php

require('vehicle.php');
require('motorcycle.php');
require('car.php');

$bmw = new Car;
echo "<pre>";
var_dump($bmw);
echo "</pre>";

$myBike = new MotorCycle;
if (!$myBike->isGoodForRain()) {
    echo "true";
}


echo "<pre>";
var_dump($myBike);
echo "</pre>";