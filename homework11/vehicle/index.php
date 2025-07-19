<?php

require('motorcycle.php');


$myBike = new MotorCycle;

$myBike->wheels = 4;

if ($myBike->isGoodForRain()) {
    echo "true";
}
