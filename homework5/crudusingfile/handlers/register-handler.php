<?php
session_start();
$errors = [];


// INCLUDE SECTION 
include '../core/functions.php';
include '../core/validations.php';
include '../core/csv-functions.php';


// SERVER CHECK SECTION 
if (! is_server_method($_SERVER, "POST")) {
    $errors[] = "This SERVER method is not supported!";
    $_SESSION['errors'] = $errors;
    jump_to("../register.php");
    die();
}

// INPUTS SANITISATION SECTION
if (is_input_received($_POST, 'name')) {
    foreach ($_POST as $key => $val) {
        sanitize($val);
        $$key = $val;
    }
}

// VALIDATION SECTION 
$errors = array_merge($errors, validateName($name));
$errors = array_merge($errors, validateEmail($email));
$errors = array_merge($errors, validatePassword($pass));


// FILE OPERATION AND RESULTS SECTION
if (empty($errors)) {

    //if email is not registered
    if ((isEmailExist("../data/user.csv", $email)) == false) {

        // if saving user operation was successful
        if (registerNewUser("../data/user.csv",$name, $email, sha1($pass)) == true) {
            $_SESSION['message'] = "You have registered successfully, please login...";
            jump_to("../login.php");
            die();
        }
        // if saving user operation failed for any reason
        $errors[] = "Error saving your data, please try again later!";
        $_SESSION['errors'] = $errors;
        jump_to("../register.php");
        die();
    }

    //if email is registered before
    $errors[] = "This email was registered before!";
    $_SESSION['errors'] = $errors;
    jump_to("../login.php");
    die();
}

// if validation errors were found
$_SESSION['errors'] = $errors;
array_unshift($_SESSION['errors'], "Please make sure you correct below errors:");
jump_to("../register.php");
die();
