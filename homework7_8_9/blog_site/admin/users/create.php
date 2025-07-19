<?php

//----------------------------create new user-----------------------
//---------------------------------Main----------------------------

// <!-- config -->
require_once('../../app/config.php');
// <!-- functions -->
require_once('../../app/func-main.php');

// <!-- Header -->
require_once('../inc/header.php');
// <!-- Navigation -->
require_once('../inc/nav.php');

$motherPage = URL . 'admin/users/users.php';


// create mode (returned after user data validation)
//--------------------------------------------------------------------------->>>>>
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (! empty($_SESSION['user'])) {
        //dumpDie("333");
        //dumpDie($_SESSION['post']);

        // Fetch post info returning from previous session & assign them to variables
        $userName = $_SESSION['user']['username'];
        $name = $_SESSION['user']['name'];
        $email = $_SESSION['user']['email'];
        
        // dumpDie($userName);
        // dumpDie($_SESSION['user']);
        unset($_SESSION['user']);
    } else {
        // Fetch post info returning from previous session & assign them to variables
        $username = $name = $user = $password = $email = "";
    }
} else {
    //dumpDie("444", 1);
    $_SESSION['errors'] = array("Un-authorized Request - create!");
    redirect($motherPage);
}

$required = '<span class=" text-danger">*</span>';
?>


<!-- Main Content-->
<h1 class=" display-3 text-center mt-5">Create New User</h1>

<div class=" col-10 my-5 p-5 mx-auto rounded-2 border shadow-sm">
    <form action="<?= URL ?>admin/actions/users/save.php"
        method="POST"
        class="form">

        <?php include_once('../inc/alert.php'); ?>

        <!-- user name -->
        <div class="mb-3">
            <label for="title" class=" form-label">Username <?= $required ?></label>
            <input type="text" name="username" value="<?= $userName?? "" ?>" class=" form-control">
        </div>
        <!-- name -->
        <div class="mb-3">
            <label for="publisher" class=" form-label">Name <span class=" text-danger">*</span></label>
            <input type="text" name="name" value="<?= $name?? "" ?>" class=" form-control">
        </div>
        <!-- Email -->
        <div class="mb-3">
            <label for="publisher" class=" form-label">Email <span class=" text-danger">*</span></label>
            <input type="text" name="email" value="<?= $email?? "" ?>" class=" form-control">
        </div>
        <!-- Password -->
        <div class="mb-3">
            <label for="publisher" class=" form-label">Password <span class=" text-danger">*</span></label>
            <input type="password" name="password" value="" class=" form-control">
        </div>
        <!-- Password repeat -->
        <div class="mb-3">
            <label for="publisher" class=" form-label">Password repeat <span class=" text-danger">*</span></label>
            <input type="password" name="password-repeat" value="" class=" form-control">
        </div>
        <!-- Submit butoon -->
        <div class="mb-3">
            <button type="submit"
                name="save"
                value="save"
                class="btn btn-success form-control p-2 mt-3 rounded-1"> Create User
            </button>
        </div>
    </form>
</div>

<!-- Footer -->
<?php require_once('../inc/footer.php'); ?>