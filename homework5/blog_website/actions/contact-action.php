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
} else {
    $errors[] = "Please enter all details!";
    $_SESSION['errors'] = $errors;
    jump_to("../contact.php");
    die();
}

// VALIDATION SECTION 
$errors = array_merge($errors, validateName($name));
$errors = array_merge($errors, validateEmail($email));
$errors = array_merge($errors, validateMessage($message));


// FILE OPERATION AND RESULTS SECTION
if (empty($errors)) {

    // if the message was submitted successfully
    if (($results = messageSubmit("../database/messages.csv", $name, $email, $message)) == true) {
        $_SESSION['message'] = "Thank you for reaching out, we will get beck to you as fast as possible";
        jump_to("../contact.php");
        die();
    }
    // if the message was not submitted and failed for any reason
    $errors[] = $results;
    $_SESSION['errors'] = $errors;
    jump_to("../contact.php");
    die();
}
// if validation errors were found
$_SESSION['errors'] = $errors;
array_unshift($_SESSION['errors'], "Please make sure you correct below errors:");
jump_to("../contact.php");
die();
