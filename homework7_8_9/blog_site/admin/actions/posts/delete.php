<?php

//-------------------------------delete post-----------------------
//---------------------------------actions-------------------------


// <!-- config files -->
require_once('../../../app/config.php');
require_once('../../../database\db-config.php');

// <!-- functions files -->
require_once('../../../app/func-main.php');
require_once('../../../app/func-db.php');

$motherPage = URL . 'admin/posts/posts.php';


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['errors'] = array("Un-authorized Request - delete post!");
    redirect($motherPage);
}

if (! empty($_POST['id-delete'])) {
    $postId = $_POST['id-delete'];


    mysqli_select_db($conn,  dbaseName);
    $sqlQuery = "DELETE FROM `posts` WHERE `id`='$postId'";

    try {
        mysqli_query($conn, $sqlQuery);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success'] = "The post has been deleted successfully!";
        } else {
            $_SESSION['error'] = array("Post cannot be deleted, please try gain later!");
        }
    } catch (ErrorException $e) {
        $_SESSION['error'] = array($e->getMessage());
    }
} else {
    // no id submitted
    $_SESSION['error'] = array("Post cannot be deleted, please try gain later!");
}

redirect($motherPage);
