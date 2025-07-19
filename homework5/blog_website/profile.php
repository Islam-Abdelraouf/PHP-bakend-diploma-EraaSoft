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
$user_data = $_SESSION['auth'];
?>

<!-- NAVBAR SECTION -->
<?php include 'inc/nav.php'; ?>

<!-- Body Contents -->

<!-- Page Title -->
<?php addTitleSection("Member Profile"); ?>

<!-- WELCOME LOGIN MESSAGE -->
<?php if (isset($_SESSION['auth'], $_SESSION['message'])): ?>
    <nav class="alert alert-success col-12 mx-auto text-center mt-3 p-0">
        <h7><?= $_SESSION['message'] ?></h7>
    </nav>
    <nav class="col-12 mx-auto text-center mt-3 p-0">
        <h7>Hi <?= $_SESSION['auth'][1] ?>, welcome to our website.</h7>
    </nav>
<?php endif; ?>

<div class="container ">
    <div class="col-6 mx-auto py-2 px-4">

        <div class="card">
            <div class="card-header">
                user credentials
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">user id: <?= $user_data[0] ?></li>
                <li class="list-group-item">username: <?= $user_data[1] ?></li>
                <li class="list-group-item">user email: <?= $user_data[2] ?></li>
            </ul>
        </div>
        <div class="row">
            <form action="edit.php" method="post">
                <!-- submit button -->
                <div class="input-set">
                    <button type="submit" value="update" class="btn btn-primary col-12 mt-3">Edit Password</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Clearing out temporary S_SESSION[] variables -->
<?php
unset($_SESSION['message']);
?>

<!-- FOOTER SECTION -->
<?php include 'inc/footer.php'; ?>