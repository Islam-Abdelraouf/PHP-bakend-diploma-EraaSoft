<!-- Head section -->
<?php include 'inc/header.php'; ?>

<!-- INCLUDE SECTION -->
<?php include 'core/functions.php'; ?>

<!-- url jumbing attack -->
<?php if (! isset(($_SESSION['auth']))) {
    jump_to("login.php");
    die();
}
?>

<!-- Navigation section -->
<?php include 'inc/nav.php'; ?>


<div class="border col-6 mx-auto text-center py-1 mt-2 mb-2 py-4">
    <h3>Admin Area - Home Page</h3>
</div>

<!-- show the error message received from logout URL jumping protection logic -->
<?php if (isset($_SESSION['errors'])) : ?>
    <div class="alert alert-danger col-6 mx-auto text-center  py-1 px-0">
        <p><?php echo $_SESSION['errors'][0]; ?></p>
    </div>
<?php endif; ?>

<!-- show the success message received from the edit-handler -->
<?php if (isset($_SESSION['success'])) : ?>
    <div class="alert alert-success col-6 mx-auto text-center  py-1 px-0">
        <p><?php echo $_SESSION['success']; ?></p>
    </div>
<?php endif; ?>

<!-- User welcome message -->
<?php if (isset($_SESSION['auth'])) : ?>
    <?php $userData = $_SESSION['auth']; ?>
    <div class="text-center col-12 mx-auto mt-2 mb-2 py-2">
        <h5><?php echo "Hi " . $userData[1] . " Welcome back"; ?></h5>
    </div>
<?php endif; ?>


<?php
    //unset the temporary session messages
    unset($_SESSION['success']);
    unset($_SESSION['errors']);
?>


<!-- Footer section -->
<?php include 'inc/footer.php'; ?>