<?php

//----------------------------------Login--------------------------
//---------------------------------actions-------------------------

session_start();

// <!-- config files -->
define("URL", "http://127.0.0.1/homework7_8_9/blog_site/");
require_once('../../../database/db-config.php');

// <!-- functions files -->
require_once('../../../app/func-main.php');
require_once('../../../app/func-db.php');
require_once('../../../app/func-validation.php');

// assign return pages
$successPage = URL . 'admin';
$errorPage = URL . 'admin/auth/login.php';


// declaring alerts buffers
$errors = [];
$success = [];

// validate Server Method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $errors[] = "Un-authorized Request - Login!";
    redirect($errorPage);
}

// Validate Login Request
if (! isset($_POST['login'])) {
    $errors[] = "Un-authorized Request - Login!";
    redirect($errorPage);
}

// Sanitization Section
foreach ($_POST as $k => $value) {
    // 01. fetch all $_POST attributes and assign them to variables
    // 02. trim whitespaces on the right and left sides
    // 03. remove all html special chars
    // 04. convert all multi whitespaces, tabs, and new lines into a single space.
    $$k = preg_replace('/\s+/', ' ', htmlspecialchars(trim($value)));
}


// Validation Section
$errors = array_merge($errors, validation($username, inputType::name));     // username validation
$errors = array_merge($errors, validation($password, inputType::password)); // password validation


if (!empty($errors)) {
    redirect($errorPage);
}

// sql query string
$sqlQuery =    "SELECT `users`.`id` AS 'user_id', `users`.`username`, `users`.`password`
                FROM `users`
                WHERE `users`.`username` = '{$username}' ;";
//dumpDie($sqlQuery,1);

try {
    // select database file
    mysqli_select_db($conn, dbaseName);
    // execute query
    $results = mysqli_query($conn, $sqlQuery);

    //if username exists
    if (mysqli_num_rows($results) > 0) {
        $user = mysqli_fetch_object($results);
        // if password is correct
        if (password_verify($password, $user->password)) {
            $_SESSION['auth'] = $user;
            $success[] = "username does exists.";
            $_SESSION['sucess'] = $success;

            //redirecting to success page
            redirect($successPage);     

        // if password is not correct
        } else {
            $errors[] = "Password is not correct!";
            $_SESSION['errors'] = $errors;
            $_SESSION['username'] = $user->username;
        }
        //if username doesn't exist
    } else {
        $errors[] = "username does not exists.";
        $_SESSION['errors'] = $errors;
    }
} catch (ErrorException $e) {
    $_SESSION['error'] = array($e->getMessage());
}

//redirecting to error page
redirect($errorPage);   