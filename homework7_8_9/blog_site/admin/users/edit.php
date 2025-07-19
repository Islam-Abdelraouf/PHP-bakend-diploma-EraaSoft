<?php

//------------------------------Edit user--------------------------
//---------------------------------Main----------------------------


session_start();

// <!-- config files -->
require_once('../../app/config.php');
require_once('../../database/db-config.php');

// <!-- functions files -->
require_once('../../app/func-main.php');
require_once('../../app/func-db.php');

// <!-- Header -->
require_once('../inc/header.php');
// <!-- Navigation -->
require_once('../inc/nav.php');

$motherPage = URL . 'admin/users/users.php';

// edit mode (database fetched data)
//--------------------------------------------------------------------------->>>>>
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (! empty($_POST['id-edit'])) {
        // assign userId value
        //dumpDie("111");
        $userId = $_POST['id-edit'];

        $sqlQuery =    "SELECT `users`.`id` AS 'user_id', `users`.`username`, `users`.`name`, `users`.`email`
                        FROM   `users`
                        WHERE  `users`.`id` = '{$userId}';";
        //dumpDie($sqlQuery,1);
        try {
            // select database file
            mysqli_select_db($conn, dbaseName);
            // execute query
            $results = mysqli_query($conn, $sqlQuery);
            // fetch post data as an object
            $user = mysqli_fetch_object($results);

            // assign post variables
            $username = $user->username;
            $name = $user->name;
            $email = $user->email;

        } catch (ErrorException $e) {
            $_SESSION['error'] = array($e->getMessage());
        }
    } else {
        // no id submitted
        //dumpDie("222");
        $_SESSION['error'] = array("Something went wrong, please try gain later!");
    }

    if (! empty($_SESSION['errors'])) {
        redirect($motherPage);
    }

    // edit mode (returned after user data validation)
    //--------------------------------------------------------------------------->>>>>
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (! empty($_SESSION['user'])) {
        //dumpDie("333");
        //dumpDie($_SESSION['user']);

        // Fetch post info returning from previous session & assign them to variables
        $userId = $_SESSION['user']['id'];
        $username = $_SESSION['user']['username'];
        $name = $_SESSION['user']['name'];
        $email = $_SESSION['user']['email'];

        unset($_SESSION['user'], $_SERVER);
    } else {
        // Fetch post info returning from previous session & assign them to variables
        $username = $name = $user = $email = "";
    }
} else {
    //dumpDie("444", 1);
    $_SESSION['errors'] = array("Un-authorized Request - edit!");
    redirect($motherPage);
}

$required = '<span class=" text-danger">*</span>';
?>


<!-- Main Content-->
<h1 class=" display-3 text-center mt-5">Edit User</h1>

<div class=" col-10 my-5 p-5 mx-auto rounded-2 border shadow-sm">
    <form action="../actions/users/update.php"
        method="POST"
        class="form">

        <?php include_once('../inc/alert.php'); ?>

        <input type="hidden" name="id-edit" value="<?= $userId ?>">
        <!-- user name -->
        <div class="mb-3">
            <label for="title" class=" form-label">Username <?= $required ?></label>
            <input type="text" name="username" value="<?= $username ?? "" ?>" class=" form-control">
        </div>
        <!-- name -->
        <div class="mb-3">
            <label for="publisher" class=" form-label">Name <span class=" text-danger">*</span></label>
            <input type="text" name="name" value="<?= $name ?? "" ?>" class=" form-control">
        </div>
        <!-- Email -->
        <div class="mb-3">
            <label for="publisher" class=" form-label">Email <span class=" text-danger">*</span></label>
            <input type="text" name="email" value="<?= $email ?? "" ?>" class=" form-control">
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
        <!-- Update Button -->
        <div class="mb-3">
            <button type="submit"
                name="save"
                value="save"
                class="btn btn-success form-control p-2 mt-3 rounded-1"> Update
            </button>
        </div>
    </form>
</div>


<!-- Footer -->
<?php require_once('../inc/footer.php'); ?>