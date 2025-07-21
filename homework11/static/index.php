<?php

session_start();
require_once('user.php');
require_once('session.php');

// echo User::generateId();

Session::set('name', 'islam');
Session::set('email', 'm.engineer.islam@gmail.com');
Session::set('type', 'admin');

echo "<pre>";
var_dump(Session::getAll());
echo "</pre>";