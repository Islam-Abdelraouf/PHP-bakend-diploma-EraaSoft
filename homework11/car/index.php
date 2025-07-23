<?php

require_once('car.php');

$myCar = new Car(carMake::BMW, carColor::Red, "B3", "2022");

echo "My car's engine is " . $myCar->getEngineStatus();