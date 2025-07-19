<?php

//-------------------------------update user-----------------------
//---------------------------------actions-------------------------


// <!-- config files -->
require_once('../../../app/config.php');
require_once('../../../database/db-config.php');

// <!-- functions files -->
require_once('../../../app/func-main.php');
require_once('../../../app/func-db.php');
require_once('../../../app/func-validation.php');

$successPage = URL . 'admin/users/users.php';
$errorPage = URL . 'admin/users/edit.php';


// declaring alerts buffers
$errors = [];
$success = [];

// validate server method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ( //in case of full data entry
        //---------------------------------------------------------------------------------->>>
        (!empty($_POST['username'])) &&
        (!empty($_POST['name'])) &&
        (!empty($_POST['email'])) &&
        (!empty($_POST['password']) && !empty($_POST['password-repeat']))
    ) {
        //dumpDie("111");

        //if all data are received
        // 1. execute sanitization
        // 2. execute validation
        // 3. check if password === password-repeat

        // assign id variables
        $userId = $_POST['id-edit'];

        // Data sanitization
        $username = sanitization($_POST['username']);
        $name = sanitization($_POST['name']);
        $email = sanitization($_POST['email']);
        $password = sanitization($_POST['password']);
        $passwordRepeat = sanitization($_POST['password-repeat']);

        // Data validation
        $errors = array_merge($errors, validation($username, inputType::name));
        $errors = array_merge($errors, validation($name, inputType::name));
        $errors = array_merge($errors, validation($email, inputType::email));
        $errors = array_merge($errors, validation($password, inputType::password));
        $errors = array_merge($errors, validation($passwordRepeat, inputType::password));
        $errors = array_merge($errors, passwordValidation($password, $passwordRepeat));
    } else {
        //in case of any missing data entry
        //---------------------------------------------------------------------------------->>>
        //dumpDie("222");
        // 1. prepare error text
        // 2. return post data for user review

        // returning missing data error
        $errors[] = "Missing data! Please enter all required information!";
        // $_SESSION['errors'] = $errors;

        //returning post information - for user review
        // $_SESSION['user']['username'] = $_POST['username'];
        // $_SESSION['user']['name'] = $_POST['name'];
        // $_SESSION['user']['email'] = $_POST['email'];
        // redirect($errorPage);
        //-------------------------------------------------------------------------------------->>>
    }

    if (! empty($errors)) {
        //---------------------------------------------------------------------------------->>>
        // if ERRORS are present
        //dumpDie("333", 1);
        //returning missing data error
        $_SESSION['errors'] = $errors;
        //returning post information - for user review
        $_SESSION['user']['id'] = $_POST['id-edit'];
        $_SESSION['user']['username'] = $_POST['username'];
        $_SESSION['user']['name'] = $_POST['name'];
        $_SESSION['user']['email'] = $_POST['email'];

        //dumpDie($_SESSION['user'],1);
        redirect($errorPage);
        //---------------------------------------------------------------------------------->>>

    } else {
        //---------------------------------------------------------------------------------->>>
        // if NO ERRORS are present

        // password hashing preparatiom
        $password = password_hash($password, PASSWORD_DEFAULT);

        // --- database UPDATE ----//
    }
    // query string
    $sqlQuery =        "UPDATE  `users`
                            SET     `users`.`username` = '$username',
                                    `users`.`name` = '$name',
                                    `users`.`email` = '$email',
                                    `users`.`password` = '$password'
                            WHERE   `users`.`id` = '{$userId}';";
    try {
        // select database file
        mysqli_select_db($conn, dbaseName);
        // execute query
        $results = mysqli_query($conn, $sqlQuery);

        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success'] = "The user has been updated successfully!";
            // redirection to SUCCESS page - record update done
            redirect($successPage);
        } elseif (mysqli_affected_rows($conn) == 0) {
            // redirection to POSTS page - no update done
            redirect($successPage);
        } else {
            // assign error message - error updating record
            $_SESSION['error'] = array("Cannot update this user at the moment, please try gain later!");
        }
    } catch (ErrorException $e) {
        $_SESSION['error'] = array($e->getMessage());
    }

    // redirection to ERROR page
    redirect($errorPage);
} else {
    $errors[] = "Un-authorized Request - save post!";
    $_SESSION['errors'] = $errors;
    redirect($errorPage);
}
