<?php

//define("URL", "http://127.0.0.1/homework7_8_9/blog_site/");

//returning image information if exist - for user review
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    //dumpDie("uploaded");
    //dumpDie($_FILES,1);
    
    $image = $_FILES['image'];
    $imageExtension = pathinfo($image['name'], PATHINFO_EXTENSION);
    
    $tempImageName = "posts-" . rand(1000, 100000) . "." . $imageExtension;
    $tempImagePath = "../../../assets/img/posts/temp/{$tempImageName}";

    // --- transfer the image from the temp folder ----//
    move_uploaded_file($image['tmp_name'], $tempImagePath);

    //$tempImagePath = URL . "assets/img/posts/Temp/{$tempImageName}";
    $_SESSION['post']['image'] = "assets/img/posts/temp/{$tempImageName}";
} else {
    if (!empty($_POST['old-image'])) {
        $_SESSION['post']['image'] = $_POST['old-image'];
    } else {
        $_SESSION['post']['image'] = "";
    }
}
