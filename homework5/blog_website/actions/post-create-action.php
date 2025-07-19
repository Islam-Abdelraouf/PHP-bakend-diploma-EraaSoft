<?php
session_start();
$errors = [];

// INCLUDE SECTION 
include '../core/functions.php';
include '../core/validations.php';
include '../core/csv-functions.php';

// Jumping URL protection 
if (! isset($_SESSION['auth'])) {
    $errors[] = "Unauthorized access!";
    $_SESSION['errors'] = $errors;
    jump_to("../login.php");
    die();
}

//grabbing the user auth data
$userData = $_SESSION['auth'];

// CHECK SERVER REQUEST 
if (! is_server_method($_SERVER, "POST")) {
    $errors[] = "This SERVER method is not supported!";
    $_SESSION['errors'] = $errors;
    jump_to("../post-create.php");
    die();
}

// INPUTS SANITISATION SECTION
if (is_input_received($_POST, 'title')) {
    foreach ($_POST as $key => $val) {
        sanitize($val);
        $$key = $val;
    }
} else {
    $errors[] = "Please enter all details!";
    $_SESSION['errors'] = $errors;
    jump_to("../post-create.php");
    die();
}

// VALIDATION SECTION - text
$errors = array_merge($errors, validatePostTitle($title));
$errors = array_merge($errors, validatePostBody($body));


// VALIDATION SECTION - image
if (! isset($_FILES)) {
    $errors[] = "Please select a post's photo.";
} else {
    $image = $_FILES['image'];
}

if ($image['size'] > 0) { // if image is uploaded
    //Type Validation
    $allowedTypes = ['image/png', 'image/jpg', 'image/jpeg', 'image/jif', 'image/svg', 'image/webp'];
    $rcvdType = $image['type'];
    if (! in_array($rcvdType, $allowedTypes)) {
        $errors[] = 'This image type is not allowed!';
    }

    //Size Validation
    $allowedSize = 2 * 1024 * 1024;
    $rcvdSize = $image['size'];
    if ($rcvdSize > $allowedSize) {
        $errors[] = 'This image is oveersize, maximum allowed size is 2 MB!';
    }

    //Temp file transfer
    $extension = pathinfo($image['name'], PATHINFO_EXTENSION);
    $imageName = "posts-" . rand(1000, 100000) . "." . $extension;

    if (! (move_uploaded_file($image['tmp_name'], "../assets/images/$imageName"))) {
        $error[] = 'Error uploading the image!';
    }
}


// FILE OPERATION AND RESULTS SECTION
if (empty($errors)) {
    $id = postsTotalCount() + 1;

    $post = [
        "username" => $userData[1],
        "post_id" => $id,
        "title" => $title,
        "body" => $body,
        "image" => $imageName
    ];

    //extracting original data from json file
    $dataFilePath = "../database/posts.json";
    $oldDataJson = file_get_contents($dataFilePath);
    $oldDataArr = json_decode($oldDataJson, 1);

    //Add the new record to the array & convert it to Json
    $newDataArr = $oldDataArr;
    $newDataArr[] = $post;
    $newDataJson = json_encode($newDataArr, JSON_PRETTY_PRINT);

    //
    if (! file_put_contents($dataFilePath, $newDataJson, 1)) {
        $errors[] = "Error savig the post, please try again later!";
    } else {
        $_SESSION['success'] = "The post was saved successfully.";
        jump_to("../post-create.php");
        die();
    }
}

// if validation errors were found
$_SESSION['errors'] = $errors;
array_unshift($_SESSION['errors'], "Please make sure you correct below errors:");
pre_print_r($_SESSION['errors']);
jump_to("../post-create.php");
die();
