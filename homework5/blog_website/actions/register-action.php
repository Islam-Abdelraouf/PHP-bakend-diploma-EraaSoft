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
    jump_to("../contact.php");
    die();
}

// INPUTS SANITISATION SECTION
if (is_input_received($_POST, 'name')) {
    foreach ($_POST as $key => $val) {
        sanitize($val);
        $$key = $val;
    }
} else {
    $errors[] = "Please enter all details!";
    $_SESSION['errors'] = $errors;
    jump_to("../contact.php");
    die();
}

// VALIDATION SECTION 
$errors = array_merge($errors, validateName($name));
$errors = array_merge($errors, validateEmail($email));
$errors = array_merge($errors, validatePassword($pass));

// FILE OPERATION AND RESULTS SECTION
if (empty($errors)) {

    //if email is not registered
    if (! is_array($results = isEmailExist("../database/users.txt", $email))) {

        // if the user was registered successful
        if (registerNewUser("../database/users.csv", $name, $email, sha1($pass)) == true) {
            $_SESSION['message'] = "You have registered successfully, please login...";
            jump_to("../login.php");
            die();
        }
        // if user registration was failed for any reason
        $errors[] = "Error saving your data, please try again later!";
        $_SESSION['errors'] = $errors;
        jump_to("../contact.php");
        die();
    }

    //if email is registered before || error during looking up the email
    $errors[] = "This email is already registerd!"; //(error received from function isEmailExist)
    $_SESSION['errors'] = $errors;
    pre_print_r($_SESSION['errors']);
    jump_to("../contact.php");
    die();
}

// if validation errors were found
$_SESSION['errors'] = $errors;
array_unshift($_SESSION['errors'], "Please make sure you correct below errors:");
pre_print_r($_SESSION['errors']);
jump_to("../contact.php");
die();
