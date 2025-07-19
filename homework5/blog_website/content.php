<!-- HEADER SECTION -->
<?php include 'inc/header.php'; ?>

<!-- INCLUDE SECTION -->
<?php include 'core/functions.php'; ?>

<!-- url jumbing attack -->
<?php
if (! isset($_SESSION['auth'])) {
    jump_to('login.php');
    die();
}
?>

<!-- NAVBAR SECTION -->
<?php include 'inc/nav.php'; ?>

<!-- Body Contents -->

<!-- Page Title -->
<?php addTitleSection("Blog"); ?>


<!-- FOOTER SECTION -->
<?php include 'inc/footer.php'; ?>