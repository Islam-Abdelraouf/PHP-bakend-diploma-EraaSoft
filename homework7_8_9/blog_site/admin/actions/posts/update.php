<?php

//-------------------------------update post-----------------------
//---------------------------------actions-------------------------


// <!-- config files -->
require_once('../../../app/config.php');
require_once('../../../database/db-config.php');

// <!-- functions files -->
require_once('../../../app/func-main.php');
require_once('../../../app/func-db.php');
require_once('../../../app/func-validation.php');

$successPage = URL . 'admin/posts/posts.php';
$errorPage = URL . 'admin/posts/edit.php';


// declaring alerts buffers
$errors = [];
$success = [];

// validate server method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (
        //in case of complete data entry
        //---------------------------------------------------------------------------------->>>
        (!empty($_POST['id-edit'])) &&
        (!empty($_POST['title'])) &&
        (!empty($_POST['publisher'])) &&
        (!empty($_POST['content'])) &&
        ((isset($_FILES['image']) && $_FILES['image']['error'] == 0) || ((!empty($_POST['old-image']))))
    ) {
        //if all data are received
        // 1. assign post id and user id
        // 2. execute sanitization
        // 3. execute validation
        // 4. if new image was uploaded (validate it & update error array)
        // 5. if old image was re-posted

        // assign id variables
        $postId = $_POST['id-edit'];
        $user_id = rand(1, 10);

        // Data sanitization
        $title = sanitization($_POST['title']);         //title sanitization
        $publisher = sanitization($_POST['publisher']); //publisher sanitization
        $content = sanitization($_POST['content']);     //content sanitization

        // Data validation
        //$errors = array_merge($errors, validation($user_id, inputType::user_id));     //user id validation
        $errors = array_merge($errors, validation($title, inputType::title));           //title validation
        $errors = array_merge($errors, validation($publisher, inputType::publisher));   //publisher validation
        $errors = array_merge($errors, validation($content, inputType::content));       //content validation

        //image validation
        if ((isset($_FILES['image']) && $_FILES['image']['error'] == 0)) {
            //receiving new image
            $uploadedImage = $_FILES['image'];
            $errors = array_merge($errors, validation($uploadedImage, inputType::image));
        } elseif (!empty($_POST['old-image'])) {
            //old image re-posted
            $oldImage = $_POST['old-image'];
        }
    } else {

        //in case of any missing data entry

        // returning missing data error
        $errors[] = "Missing data! Please enter all required information!";
    }

    if (! empty($errors)) {
        // if ERROR is present
        //---------------------------------------------------------------------------------->>>
        
        //returning missing data error
        $_SESSION['errors'] = $errors;
        //returning post information - for user review
        $_SESSION['post']['id'] = $_POST['id-edit'];
        $_SESSION['post']['title'] = $_POST['title'];
        $_SESSION['post']['publisher'] = $_POST['publisher'];
        $_SESSION['post']['content'] = $_POST['content'];
        //returning image information if exist - for user review
        require_once('../../inc/save-post-validate-image.php');
        redirect($errorPage);
        //---------------------------------------------------------------------------------->>>

    } else {
        //---------------------------------------------------------------------------------->>>
        // if NO ERRORS are present

        // if new image uploaded
        if (!empty($uploadedImage)) {

            $tempImage = $uploadedImage['tmp_name']; //full address "c:/ drive" temp file
            $tempImagePath = $tempImage;
            
            // if the same old image was re-posted
        } elseif (!empty($oldImage)) {

            $tempImage = $oldImage; //full address "relative server address"
            $tempImagePath = "../../../" . $tempImage; // test again ??? **** //\\//\\ **** *****
        }

        if (
            str_contains($tempImagePath, "Temp") ||
            str_contains($tempImagePath, "temp") ||
            str_contains($tempImagePath,  "Tmp") ||
            str_contains($tempImagePath,  "tmp")
        ) {
            $finalImageName = "posts-" . rand(1000, 100000) . ".jpg";
            $finalImagePath = "../../../assets/img/posts/{$finalImageName}";
            if (!rename($tempImagePath, $finalImagePath)) {
                $error[] = 'Error copying the image!';
            }
        } else {
            $finalImageName = pathinfo($tempImagePath, PATHINFO_BASENAME);
            $finalImagePath = $tempImagePath;
        }
    }


    // query string
    $sqlQuery =        "UPDATE  `posts`
                            SET     `posts`.`title` = '$title',
                                    `posts`.`publisher` = '$publisher',
                                    `posts`.`content` = '$content',
                                    `posts`.`image` = 'assets/img/posts/{$finalImageName}'
                            WHERE   `posts`.`id` = '{$postId}';";
    try {
        // select database file
        mysqli_select_db($conn, dbaseName);
        // execute query
        $results = mysqli_query($conn, $sqlQuery);

        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success'] = "The post has been updated successfully!";
            // redirection to SUCCESS page - record update done
            redirect($successPage);
        } elseif (mysqli_affected_rows($conn) == 0) {
            // redirection to POSTS page - no update done
            redirect($successPage);
        } else {
            // assign error message - error updating record
            $_SESSION['error'] = array("Cannot update your Post at the moment, please try gain later!");
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
