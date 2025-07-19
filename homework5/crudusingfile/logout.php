<?php
include 'core/functions.php';

session_start();

//Jomping link protection
if (!isset($_POST['logout'])) {
    $_SESSION['errors'] = ["Unauthorised action!"];
    jump_to('index.php');
    die();
}

session_destroy();
jump_to("login.php");
die();
