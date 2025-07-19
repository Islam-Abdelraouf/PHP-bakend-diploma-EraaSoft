<!-- FOOTER SECTION -->
<?php include 'inc/header.php'; ?>

<!-- NAVBAR SECTION -->
<?php include 'inc/nav.php'; ?>

<!-- INCLUDE SECTION -->
<?php include 'core/functions.php'; ?>

<!-- Body Contents -->

<!-- Page Title -->
<?php addTitleSection("Create Post"); ?>


<!-- CONTACT US FORM -->
<div class="container px-4">

    <div class="col-10 mx-auto py-2 px-4">
        <div class="row">
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success col-12 mx-auto mt-1 mb-0 py-0 px-0 text-center">
                    <p><?= $_SESSION['success']; ?></p>
                </div>
            <?php endif; ?>
        </div>

        <div class="row">
            <?php if (isset($_SESSION['errors'])): ?>
                <?php $errors = $_SESSION['errors']; ?>
                <?php foreach ($errors as $errorLine): ?>
                    <div class="alert alert-danger col-12 mx-auto mt-1 mb-0 py-0 px-0 text-center">
                        <p><?= $errorLine; ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <div class="row">
            <?php include 'inc/form-post-create.php'; ?>
        </div>
    </div>


</div>


<!-- Clearing out temporary S_SESSION[] variables -->
<?php
unset($_SESSION['errors']);
unset($_SESSION['success']);
?>


<!-- FOOTER SECTION -->
<?php include 'inc/footer.php'; ?>