<?php

include_once('employee.php');

$user = new Employee;

$user->firstName = "Islam" ;
$user->lastName = "Abdelraouf" ;
$user->setPassword("asd123");
echo "Password : " . $user->getPassword();