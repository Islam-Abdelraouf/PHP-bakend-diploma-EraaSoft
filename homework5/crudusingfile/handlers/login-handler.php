<?php
session_start();
$errors = [];

// INCLUDE SECTION 
include '../core/functions.php';
include '../core/validations.php';
include '../core/csv-functions.php';

// SERVER CHECK SECTION 
if (! is_server_method($_SERVER, "POST")) {
    $_SESSION['errors'][] = "This SERVER method is not supported!";
    jump_to("../login.php");
    die();
}

// INPUTS SANITISATION SECTION
if (is_input_received($_POST, 'email')) {
    foreach ($_POST as $key => $val) {
        sanitize($val);
        $$key = $val;
    }
}

// VALIDATION SECTION 
$errors = array_merge($errors, validateEmail($email));
$errors = array_merge($errors, validatePassword($pass));



// FILE OPERATION AND RESULTS SECTION

//if no errors generated during validation
if (empty($errors)) {

    // if user was found in the csv file
    if (($userRow = checkLoginCredentials("../data/user.csv", $email, $pass)) !== false) {
        $_SESSION['auth'] = $userRow;
        $_SESSION['success'] = "Login successful!";
        jump_to("../index.php");
        die();
    }

    // if user was not found in the csv file
    $errors[] = "You entered wrong credentials, please try again!";
    $_SESSION['errors'] = $errors;
    jump_to("../login.php");
    die();
}

// if validation errors were generated during validation
$_SESSION['errors'] = $errors;
array_unshift($_SESSION['errors'], "Please make sure you correct below errors:");
jump_to("../login.php");
die();
