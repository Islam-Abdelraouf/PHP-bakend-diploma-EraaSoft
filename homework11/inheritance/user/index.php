<?php

include_once("user.php");
include_once("customer.php");
include_once("admin.php");


$admin = new Admin;
$admin->firstName = "Islam";
$admin->lastName = "Abdelraouf";

echo $admin->checkAdmin();

