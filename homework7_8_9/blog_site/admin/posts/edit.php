<?php

//------------------------------Edit post--------------------------
//---------------------------------Main----------------------------

// <!-- config files -->
require_once('../../app/config.php');
require_once('../../database/db-config.php');

// <!-- functions files -->
require_once('../../app/func-main.php');
require_once('../../app/func-db.php');

// <!-- Header -->
require_once('../inc/header.php');
// <!-- Navigation -->
require_once('../inc/nav.php');

$motherPage = URL . 'admin/posts/posts.php';

// edit mode (database fetched data)
//--------------------------------------------------------------------------->>>>>
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (! empty($_POST['id-edit'])) {


        // assign postId value
        $postId = $_POST['id-edit'];

        $sqlQuery =    "SELECT `posts`.`title`, `posts`.`publisher`, `posts`.`content`, `posts`.`image`
                        FROM   `posts`
                        WHERE  `posts`.`id` = '{$postId}';";

        try {
            // select database file
            mysqli_select_db($conn, dbaseName);
            // execute query
            $results = mysqli_query($conn, $sqlQuery);
            // fetch post data as an object
            $post = mysqli_fetch_object($results);

            // assign post variables
            $title = $post->title;
            $publisher = $post->publisher;
            $content = $post->content;
            $image = $post->image;


            //dumpDie($post,1);


        } catch (ErrorException $e) {
            $_SESSION['error'] = array($e->getMessage());
        }
    } else {
        //dumpDie("222", 1);
        // no id submitted
        $_SESSION['error'] = array("Something went wrong, please try gain later!");
    }

    if (! empty($_SESSION['errors'])) {
        redirect($motherPage);
    }

    // edit mode (returned after user data validation)
    //--------------------------------------------------------------------------->>>>>
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (! empty($_SESSION['post'])) {
        //dumpDie("333");
        //dumpDie($_SESSION['post']);

        // Fetch post info returning from previous session & assign them to variables
        $postId = $_SESSION['post']['id'];
        $title = $_SESSION['post']['title'];
        $publisher = $_SESSION['post']['publisher'];
        $content = $_SESSION['post']['content'];
        $image = $_SESSION['post']['image'];

        unset($_SESSION['post'], $_SERVER);
    } else {
        // Fetch post info returning from previous session & assign them to variables
        $postId = $title = $publisher = $content = $image = "";
    }
} else {
    //dumpDie("444", 1);
    $_SESSION['errors'] = array("Un-authorized Request - edit!");
    redirect($motherPage);
}

$required = '<span class=" text-danger">*</span>';
?>


<!-- Main Content-->
<h1 class=" display-3 text-center mt-5">Update Post</h1>

<div class=" col-10 my-5 p-5 mx-auto rounded-2 border shadow-sm">
    <form action="../actions/posts/update.php"
        method="POST"
        enctype="multipart/form-data"
        class="form">

        <?php include_once('../inc/alert.php'); ?>

        <input type="hidden" name="id-edit" value="<?= $postId ?>">
        <!-- Post title -->
        <div class="mb-3">
            <label for="title" class=" form-label">Post Title <?= $required ?></label>
            <input type="text" name="title" value="<?= $title??"" ?>" class=" form-control">
        </div>
        <!-- Post publisher -->
        <div class="mb-3">
            <label for="publisher" class=" form-label">Post Publisher <?= $required ?></label>
            <input type="text" name="publisher" value="<?= $publisher??"" ?>" class=" form-control">
        </div>
        <!-- Post content -->
        <div class="mb-3">
            <label for="content" class=" form-label">Post Content <?= $required ?></label>
            <textarea name="content" rows="10" class=" form-control"><?= $content??"" ?></textarea>
        </div>
        <!-- Post image -->
        <div class="mb-3">
            <label for="image" class="form-label">Post Image <?= $required ?></label>
            <div class="mb-3 align-content-center border rounded-2" id="old-image">
                <img id="previewImage" class="my-3 w-100 px-3 rounded-2" src="<?= URL . $image ?? "" ?>">
                <input type="hidden" name="old-image" value="<?= $image ?? "" ?>">
                <input class="form-control mb-3 w-100 mx-auto" type="file" name="image" id="imageInput">
            </div>
        </div>
        <!-- Update Button -->
        <div class="mb-3">
            <button type="submit"
                name="save"
                value="save"
                class="btn btn-success form-control p-2 mt-3 rounded-1"> Update
            </button>
        </div>
    </form>
</div>


<!-- instant image preview (with help of the AI) -->
<script src="../../js/image-preview.js"></script>

<!-- Footer -->
<?php require_once('../inc/footer.php'); ?>