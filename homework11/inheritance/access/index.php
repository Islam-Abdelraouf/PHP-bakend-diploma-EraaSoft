<?php

require_once('user.php');

// $user = new User;

// echo $user->hasAdminAccess();

// echo "<br>";

// $user->setAdminValue(true);

// echo $user->getAdminValue();

echo "<pre>";
$user = new User("Islam", "m.engineer.islam@gmail.com");
var_dump($user->getUserInfo());

$user = new User("Moustafa", "moustafa@gmail.com");
var_dump($user->getUserInfo());

$user = new User("Ahmed", "ahmed83@gmail.com");
var_dump($user->getUserInfo());
echo "</pre>";