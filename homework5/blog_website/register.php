<!-- HEADER SECTION -->
<?php include 'inc/header.php'; ?>

<!-- INCLUDE SECTION -->
<?php include 'core/functions.php'; ?>

<!-- url jumbing attack -->
<?php
if (isset($_SESSION['auth'])) {
    jump_to('profile.php');
    die();
}
?>

<!-- NAVBAR SECTION -->
<?php include 'inc/nav.php'; ?>

<!-- Body Contents -->

<!-- Page Title -->
<?php addTitleSection("Register"); ?>

<div class="container">
    <div class="col-6 mx-auto py-2 px-4">

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
            <!-- Register form -->
            <?php include 'inc/form-register.php'; ?>
        </div>

    </div>
</div>


<!-- Clearing out temporary S_SESSION[] variables -->
<?php
unset($_SESSION['errors']);
?>

<!-- INCLUDE SECTION -->
<?php include 'inc/footer.php'; ?>