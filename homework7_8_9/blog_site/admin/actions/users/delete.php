<?php


//-------------------------------delete user-----------------------
//---------------------------------actions-------------------------



// <!-- config files -->
require_once('../../../app/config.php');
require_once('../../../database\db-config.php');

// <!-- functions files -->
require_once('../../../app/func-main.php');
require_once('../../../app/func-db.php');

$motherPage = URL . 'admin/users/users.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['errors'] = array("Un-authorized Request - delete post!");
    redirect($motherPage);
}

if (! empty($_POST['id-delete'])) {
    $userId = $_POST['id-delete'];


    if ($userId !== $_SESSION['auth']->user_id) {
        mysqli_select_db($conn,  dbaseName);

        // select user and all related posts
        $sqlQuery =    "SELECT `users`.`id` AS 'user_id', `posts`.`id` 
                            FROM `users`
                            INNER JOIN `posts` ON `users`.`id` = `posts`.`user_id` 
                            WHERE `users`.`id` = '$userId';";

        try {
            $results = mysqli_query($conn, $sqlQuery);

            // if the user has no related posts
            if (mysqli_num_rows($results) == 0) {
                $sqlQuery = "DELETE FROM `users` WHERE `id`='$userId'";
                mysqli_query($conn, $sqlQuery);
                if (mysqli_affected_rows($conn) > 0) {
                    die("111");
                    $_SESSION['success'] = "The user has been deleted successfully!";
                } else {
                    $_SESSION['errors'] = array("The user cannot be deleted at the moment, please try gain later!");
                }
            } else {
                //die("222");
                $_SESSION['errors'] = array("This user cannot be deleted, another related records are present!");
            }
        } catch (ErrorException $e) {
            $_SESSION['errors'] = array($e->getMessage());
        }
    } else {
        //die("222");
        $_SESSION['errors'] = array("This user is active, cannot be deleted!");
    }
} else {
    // no id submitted
    $_SESSION['errors'] = array("The user cannot be deleted at the moment, please try gain later!");
}

redirect($motherPage);
