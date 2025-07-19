<?php

//-----------------------------delete message----------------------
//---------------------------------actions-------------------------


    // <!-- config files -->
    require_once('../../../app/config.php');
    require_once('../../../database\db-config.php');

    // <!-- functions files -->
    require_once('../../../app/func-main.php');
    require_once('../../../app/func-db.php');

    $motherPage = URL . 'admin/messages/messages.php';
    session_start();

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        $_SESSION['errors'] = array("Un-authorized Request!");
        redirect($motherPage);
    }

    if (! empty($_POST['id-delete'])) {
        $messageId = $_POST['id-delete'];


        mysqli_select_db($conn,  dbaseName);
        $sqlQuery = "DELETE FROM `messages` WHERE `id`='$messageId'";

        try {
            mysqli_query($conn, $sqlQuery);
            if (mysqli_affected_rows($conn) > 0) {
                $_SESSION['success'] = "Message has been deleted successfully!";
            } else {
                $_SESSION['error'] = array("Message cannot be deleted, please try gain later!");
            }
        } catch (ErrorException $e) {
            $_SESSION['error'] = array($e->getMessage());
        }
    } else {
        // no id submitted
        $_SESSION['error'] = array("Message cannot be deleted, please try gain later!");
    }

    redirect($motherPage);
