<?php
include 'core/functions.php';

session_start();

// url jumbing attack
if (! isset($_POST['logout'])) {
    $_SESSION['errors'] = ["Unauthorised action!"];
    jump_to('index.php');
    die();
}


    session_destroy();
    jump_to('index.php');
    die();