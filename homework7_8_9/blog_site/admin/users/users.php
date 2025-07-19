<?php

//----------------------------Show All users-----------------------
//---------------------------------Main----------------------------

    
    // <!-- config -->
    require_once('../../app/config.php');
    require_once('../../database/db-config.php');

    // <!-- functions files -->
    require_once('../../app/func-main.php');
    require_once('../../app/func-db.php');

    // <!-- Header -->
    require_once('../inc/header.php');
    // <!-- Navigation -->
    require_once('../inc/nav.php');
?>

<!-- Main Content-->

<?php
    // query string
    $sqlQuery =    "SELECT `users`.`id` AS 'user_id', `users`.`username`, `users`.`name`, `users`.`email`
                    FROM `users`  ORDER BY `user_id` ASC;";

    // select database file
    mysqli_select_db($conn,  dbaseName);
    // execute query
    $results = mysqli_query($conn, $sqlQuery);
?>


<h1 class=" display-3 text-center mt-5">All users</h1>

<div class=" col-11 mx-auto">

    <?php include_once('../inc/alert.php'); ?>
    
    <table class="table mb-5 border table-striped table-hover"
        style=" font-size: 15px;">
        <thead>
            <tr class=" bg-dark text-light text-center">
                <th scope="col">#</th>
                <th scope="col">User Id</th>
                <th scope="col">Username</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            
            <?php $counter = 0; // table index counter?>
            <?php while ($user = mysqli_fetch_object($results)): // fetch posts' rows as objects?>

                <?php
                    // assign post object data to variables
                    $userId = $user->user_id;
                    $userName = $user->username;
                    $name = $user->name;
                    $email = $user->email;
                ?>

                <tr class=" text-center">
                    <th scope="row"><?php echo ++$counter; ?></th>
                    <td><?= $userId ?></td>
                    <td><?= $userName ?></td>
                    <td><?= $name ?></td>
                    <td><?= $email ?></td>
                    <td>
                        <!-- Delete user button -->
                        <form action="<?= URL ?>admin/actions/users/delete.php" method="post">
                            <input type="hidden" name="id-delete" value="<?= $userId ?>"></label>
                            <button type="submit" class="btn btn-outline-danger p-1 m-1 rounded-1" style="font-size: 15px;">
                                <a><i class="fa-solid fa-trash"></i></a>
                            </button>
                        </form>
                        <!-- Edit user button -->
                        <form action="<?= URL ?>admin/users/edit.php" method="post">
                            <input type="hidden" name="id-edit" value="<?= $userId ?>"></label>
                            <button type="submit" class="btn btn-outline-success p-1 m-1 rounded-1" style="font-size: 15px;">
                                <a><i class="fa-solid fa-pen-to-square"></i></a>
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<!-- Footer -->
<?php require_once('../inc/footer.php'); ?>