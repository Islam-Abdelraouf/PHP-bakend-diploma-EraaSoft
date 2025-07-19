<?php

//--------------------------------save post------------------------
//---------------------------------actions-------------------------


// <!-- config files -->
require_once('../../../app/config.php');
require_once('../../../database/db-config.php');

// <!-- functions files -->
require_once('../../../app/func-main.php');
require_once('../../../app/func-db.php');
require_once('../../../app/func-validation.php');

$successPage = URL . 'admin/posts/posts.php';
$errorPage = URL . 'admin/posts/create.php';


// declaring alerts buffers
$errors = [];
$success = [];

// validate server method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (
        //in case of complete data entry
        //---------------------------------------------------------------------------------->>>
        (!empty($_POST['title'])) &&
        (!empty($_POST['publisher'])) &&
        (!empty($_POST['content'])) &&
        ((isset($_FILES['image']) && $_FILES['image']['error'] == 0) || ((!empty($_POST['old-image']))))
    ) {
        dumpDie("111");

        //if all data are received
        // 1. execute sanitization
        // 2. execute validation
        // 3. if new image was uploaded (validate it & update error array)
        // 4. if old image was re-posted

        // assign id variables
        $user_id = $_SESSION['auth']->user_id;

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
            //dumpDie($uploadedImage,1);
        } elseif (!empty($_POST['old-image'])) {
            //old image re-posted
            $oldImage = $_POST['old-image'];
            dumpDie($oldImage);
        }
    } else {
        //in case of any missing data entry

        // returning missing data error
        $errors[] = "Missing data! Please enter all required information!";
    }

    if (! empty($errors)) {
        // if ERROR is present

        //returning missing data error
        $_SESSION['errors'] = $errors;
        //returning post information - for user review
        $_SESSION['post']['title'] = $_POST['title'];
        $_SESSION['post']['publisher'] = $_POST['publisher'];
        $_SESSION['post']['content'] = $_POST['content'];
        //returning image information if exist - for user review
        require_once('../../inc/save-post-validate-image.php');

        redirect($errorPage);
        //---------------------------------------------------------------------------------->>>

    } else {
    // if NO ERRORS are present
    //---------------------------------------------------------------------------------->>>
        // if new image uploaded
        if (!empty($uploadedImage)) {

            $tempImage = $uploadedImage['tmp_name']; //full address "c:/ drive" temp file
            $tempImagePath = $tempImage;

            // if the same old image was re-posted
        } elseif (!empty($oldImage)) {

            $tempImage = $oldImage; //full address "relative server address"
            $tempImagePath = "../../../" . $tempImage; // test again ??? **** //\\//\\ **** *****
        }

        if (str_contains($tempImagePath, "Temp") ||
            str_contains($tempImagePath, "temp") ||
            str_contains($tempImagePath,  "Tmp") ||
            str_contains($tempImagePath,  "tmp")) {
            $finalImageName = "posts-" . rand(1000, 100000) . ".jpg";
            $finalImagePath = "../../../assets/img/posts/{$finalImageName}";
            
            if (!rename($tempImagePath, $finalImagePath)) {
                $error[] = 'Error copying the image!';
            }
        } else {
            $finalImageName = pathinfo($tempImagePath, PATHINFO_BASENAME);
            $finalImagePath = $tempImagePath;
        }

        // --- database Insertion ----//

        // columns string
        $columns = "(`user_id`, `title`, `content`, `publisher`, `image`)";
        // values
        $values = "('$user_id',
                            '$title',
                            '$content',
                            '$publisher',
                            'assets/img/posts/{$finalImageName}'
                            )";
        // calling data insert function
        if (dataInsert($conn,  dbaseName, 'posts', $columns, $values) > 0) {
            $_SESSION['success'] = "The post has been addedd successfully.";
            // redirection to SUCCESS page
            redirect($successPage);
        } else {
            $errors[] = "Cannot save your post at the moment, please try gain later!";
            $_SESSION['errors'] = $errors;
        }
    }
    // redirection to ERROR page
    redirect($errorPage);
} else {
    $errors[] = "Un-authorized Request - save post!";
    $_SESSION['errors'] = $errors;
    redirect($errorPage);
}
