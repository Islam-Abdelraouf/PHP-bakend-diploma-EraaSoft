<?php
session_start();
$errors = [];

// INCLUDE SECTION 
include '../core/functions.php';
include '../core/validations.php';
include '../core/csv-functions.php';

if (empty($userData = ($_SESSION['auth']))) {
    $errors[] = "Please login before you access Admins area !";
    $_SESSION['errors'] = $errors;
    jump_to("../login.php");
    die();
}

// SERVER CHECK SECTION 
if (! is_server_method($_SERVER, "POST")) {
    $errors[] = "This SERVER method is not supported!";
    $_SESSION['errors'] = $errors;
    jump_to("../edit.php");
    die();
}


// INPUTS SANITISATION SECTION
if (is_input_received($_POST, 'oldpass')) {
    foreach ($_POST as $key => $val) {
        sanitize($val);
        $$key = $val;
    }
}

// INPUTS VALIDATION SECTION 
$errors = array_merge($errors, validatePassword($oldpass));
$errors = array_merge($errors, validatePassword($newpass));
$errors = array_merge($errors, validatePassword($passrepeat));
$errors = array_merge($errors, validatePasswordMatching($newpass, $passrepeat));


// FILE OPERATION AND RESULTS SECTION
if (empty($errors)) {

    $userId = $userData[0];
    $csvFilePath = "../data/user.csv";

    $results = updatePasswordByUserId($csvFilePath, $userId, $oldpass, $newpass);

    echo "results: " . $results;
    //die();
    if (is_bool($results) && $results == true) {
        $_SESSION['success'] = "Password was updated successfully";
        //echo "inside true condition";
        //die();
        jump_to("../index.php");
    } else {
        //echo "inside else condition";
        //die();
        if ($results == "user was not found!") {
            session_destroy();
            jump_to("../login.php");
            die();
        } else {
            $errors[] = $results;
            $_SESSION['errors'] = $errors;
            jump_to("../edit.php");
            die();
        }
    }
    // if validation errors were found
} else {
    $_SESSION['errors'] = $errors;
    array_unshift($_SESSION['errors'], "Please make sure you correct below errors:");
    jump_to("../edit.php");
    die();
}
