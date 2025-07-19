<!-- HEADER SECTION -->
<?php include 'inc/header.php'; ?>

<!-- INCLUDE SECTION -->
<?php include 'core/functions.php'; ?>


<!-- url jumbing attack -->
<?php if (!isset(($_SESSION['auth']))) {
    jump_to("login.php");
    die();
}
?>

<!-- NAVBAR SECTION -->  
<?php include 'inc/nav.php'; ?>

<!-- Body Contents -->

<!-- Page Title -->
<?php addTitleSection("Edit Password"); ?>


<div class="container ">
    <div class="col-6 mx-auto py-2 px-4">

        <div class="row">
            <!-- show all errors received from edit-action -->
            <?php if (!empty($_SESSION['errors'])): ?>
                <?php foreach ($_SESSION['errors'] as $error): ?>
                    <div class="alert alert-danger  col-12 mx-auto mt-1 mb-0 py-0 px-0 text-center">
                        <?php echo $error; ?>
                    </div>
                    <?php $_SESSION['errors'] = []; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <div class="row">
            <!-- show the success message received from edit-action -->
            <?php if (!empty($_SESSION['message'])): ?>
                <div class="alert alert-success  col-12 mx-auto mt-1 mb-0 py-0 px-0 text-center">
                    <?php echo $_SESSION['message']; ?>
                </div>
                <?php $_SESSION['message'] = []; ?>
            <?php endif; ?>
        </div>
        <div class="row">

            <!-- Edit Form -->
            <?php include 'inc/form-edit.php'; ?>
        </div>
    </div>
</div>

<!-- Footer section -->
<?php include 'inc/footer.php'; ?>