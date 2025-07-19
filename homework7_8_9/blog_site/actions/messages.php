<?php
session_start();

// declaring the error buffer
$errors = [];
$success = [];

// Include section
include_once '../database/db-config.php';
include_once '../app/func-validation.php';
include_once '../app/func-main.php';
include_once '../app/func-db.php';

// Check server method
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    die("Invalid Method!");
}

// Data sanitization
$name = sanitization($_POST['name']);
$email = sanitization($_POST['email']);
$phone = sanitization($_POST['phone']);
$message = sanitization($_POST['message']);

// Data validation
$errors = array_merge($errors, validation($name, inputType::name));
$errors = array_merge($errors, validation($email, inputType::email));
$errors = array_merge($errors, validation($phone, inputType::phone));
$errors = array_merge($errors, validation($message, inputType::message));

//dumpDie($errors,1);


// if errors been caught
if ($errors != null) {
    $_SESSION['errors'] = $errors;
} else {
    
    // --- database update ----//

    // columns string
    $columns = "(`name`,`phone`,`email`,`content`)";
    // values
    $values = "('$name',
            '$phone',
            '$email',
            '$message'
            )";
    // calling data insert function
    if(dataInsert($conn,  dbaseName, 'messages', $columns, $values)){
        $success[] = "Thanks for reaching out to us, we will do our best to reply your message!";
        $_SESSION['success'] = $success;        
    }else{
        $errors[] ="Error saving message, please try again later!";
        $_SESSION['errors'] = $errors;
    }
}


redirect('../contact.php');
