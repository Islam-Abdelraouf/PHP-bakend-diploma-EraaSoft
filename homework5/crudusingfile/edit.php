<!-- Head section -->
<?php include 'inc/header.php'; ?>


<!-- INCLUDE SECTION  -->
<?php include 'core/functions.php'; ?>
<?php include 'core/validations.php'; ?>

<!-- url jumbing attack -->
<?php if (!isset(($_SESSION['auth']))) {
    jump_to("login.php");
    die();
}
?>

<!-- Navigation section -->
<?php include 'inc/nav.php'; ?>

<h1 class="py-3 text-center">Edit Password</h1>

<!-- show all errors received from edit-handler -->
<?php if (!empty($_SESSION['errors'])): ?>
    <?php foreach ($_SESSION['errors'] as $error): ?>
        <div class="alert alert-danger text-center col-6 mx-auto py-1 px-0">
            <?php echo $error; ?>
        </div>
        <?php $_SESSION['errors'] = []; ?>
    <?php endforeach; ?>
<?php endif; ?>

<!-- show the message received from edit-handler -->
<?php if (!empty($_SESSION['message'])): ?>
    <div class="alert alert-success col-6 mx-auto text-center">
        <?php echo $_SESSION['message']; ?>
    </div>
    <?php $_SESSION['message'] = []; ?>
<?php endif; ?>


<!-- Login Form -->
<?php include 'inc/edit-form.php'; ?>

<!-- Footer section -->
<?php include 'inc/footer.php'; ?>