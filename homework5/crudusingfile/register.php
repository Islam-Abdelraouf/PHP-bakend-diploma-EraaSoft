<!-- Head section -->
<?php include 'inc/header.php'; ?>

<!-- INCLUDE SECTION -->
<?php include 'core/functions.php'; ?>

<!-- url jumbing attack -->
<?php if (isset(($_SESSION['auth']))) {
  jump_to("index.php");
  die();
}
?>


<!-- Navigation section -->
<?php include 'inc/nav.php'; ?>

<!-- Main page header -->
<h1 class="py-3 text-center">Register</h1>


<?php if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])): ?>
    <?php foreach ($_SESSION['errors'] as $error): ?>

        <div class="alert alert-danger text-center col-6 mx-auto py-1 px-0">
            <?php echo $error; ?>
        </div>

    <?php endforeach; ?>
    <?php unset($_SESSION['errors']); ?>
<?php endif; ?>

<!-- Register form section -->
<?php include 'inc/register-form.php'; ?>

<!-- Footer section -->
<?php include 'inc/footer.php'; ?>