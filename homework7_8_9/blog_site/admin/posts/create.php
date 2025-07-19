<?php

//----------------------------create new post-----------------------
//---------------------------------Main----------------------------


// <!-- config -->
require_once('../../app/config.php');
// <!-- functions -->
require_once('../../app/func-main.php');

// <!-- Header -->
require_once('../inc/header.php');
// <!-- Navigation -->
require_once('../inc/nav.php');

$motherPage = URL . 'admin/posts/posts.php';

// create mode (returned after user data validation)
//--------------------------------------------------------------------------->>>>>
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (! empty($_SESSION['post'])) {

        // Fetch post info returning from previous session & assign them to variables
        $title = $_SESSION['post']['title'];
        $publisher = $_SESSION['post']['publisher'];
        $content = $_SESSION['post']['content'];
        $image = $_SESSION['post']['image'];
        
        unset($_SESSION['post']);
    } else {
        // Fetch post info returning from previous session & assign them to variables
        $title = $publisher = $content = $image = "";
    }
} else {
    $_SESSION['errors'] = array("Un-authorized Request - create!");
    redirect($motherPage);
}

$required = '<span class=" text-danger">*</span>';
?>


<!-- Main Content-->
<h1 class=" display-3 text-center mt-5">Create New Post</h1>

<div class=" col-10 my-5 p-5 mx-auto rounded-2 border shadow-sm">
    <form action="<?= URL ?>admin/actions/posts/save.php"
        method="POST"
        enctype="multipart/form-data"
        class="form">
        <?php include_once('../inc/alert.php'); ?>
        <!-- Post title -->
        <div class="mb-3">
            <label for="title" class=" form-label">Post Title <?= $required ?></label>
            <input type="text" name="title" value="<?= $title ?? "" ?>" class=" form-control">
        </div>
        <!-- Post publisher -->
        <div class="mb-3">
            <label for="publisher" class=" form-label">Post publisher <span class=" text-danger">*</span></label>
            <input type="text" name="publisher" value="<?= $publisher ?? "" ?>" class=" form-control">
        </div>
        <!-- Post content -->
        <div class="mb-3">
            <label for="content" class=" form-label">Post content <?= $required ?></label>
            <textarea name="content" rows="10" class=" form-control"><?= $content ?? "" ?></textarea>
        </div>
        <!-- Post image -->
        <div class="mb-3">
            <label for="image" class="form-label">Post Image <?= $required ?></label>
            <div class="mb-3 align-content-center border rounded-2" id="old-image">
                <img id="previewImage" class="my-3 w-100 px-3 rounded-2" src="<?= $image? URL.$image : "" ?>">
                <input type="hidden" name="old-image" value="<?= $image ?? "" ?>">
                <input class="form-control mb-3 w-100 mx-auto" type="file" name="image" id="imageInput">
            </div>
        </div>
        <!-- Submit butoon -->
        <div class="mb-3">
            <button type="submit"
                name="save"
                value="save"
                class="btn btn-success form-control p-2 mt-3 rounded-1"> Save
            </button>
        </div>
    </form>
</div>

<!-- instant image preview (with help of the AI) -->
<script src="../../js/image-preview.js"></script>

<!-- Footer -->
<?php require_once('../inc/footer.php'); ?>