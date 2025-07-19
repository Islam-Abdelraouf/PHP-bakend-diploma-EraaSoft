<?php

//----------------------------Show All messages-----------------------

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
mysqli_select_db($conn,  dbaseName);
$sqlQuery =    "SELECT  messages.id AS 'message_id', 
                            messages.name, 
                            messages.phone, 
                            messages.email, 
                            messages.content,
                            messages.created_at,
                            users.id AS 'user_id'
                        FROM `messages`
                        INNER JOIN `users`
                        ON users.id = messages.user_id;";

$results = mysqli_query($conn, $sqlQuery);
?>

<h1 class=" display-3 text-center mt-5">Messages</h1>

<div class=" col-11 mx-auto">
    <?php include_once('../inc/alert.php'); ?>
    <table class="table mb-5 border table-striped table-hover"
        style=" font-size: 15px;">
        <thead>
            <tr class=" bg-dark text-light text-center">
                <th scope="col">Message Id</th>
                <th scope="col">Sender Id</th>
                <th scope="col">Sender Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($messageInfo = mysqli_fetch_assoc($results)): ?>
                <tr class=" text-center">
                    <th scope="row"><?= $messageInfo['message_id']; ?></th>
                    <td><?= $messageInfo['user_id']; ?></td>
                    <td><?= $messageInfo['name']; ?></td>
                    <td><?= $messageInfo['phone']; ?></td>
                    <td><?= $messageInfo['email']; ?></td>
                    <td class=" text-justify"><?= $messageInfo['content']; ?></td>
                    <td><?= $messageInfo['created_at']; ?></td>
                    <td class="d-flex justify-content-center">

                        <!-- Delete message button -->
                        <form action="<?= URL; ?>admin/actions/messages/delete.php" method="post">
                            <input type="hidden" name="id-delete" value="<?= $messageInfo['message_id'] ?>"></label>
                            <button type="submit" class="btn btn-outline-danger p-1 m-1 rounded-1" style="font-size: 15px;">
                                <a><i class="fa-solid fa-trash"></i></a>
                            </button>
                        </form>


                        <!-- Reply message button -->
                        <form action="<?= URL; ?>admin/messages/reply.php" method="post">
                            <input type="hidden" name="id-edit" value="<?= $messageInfo['message_id'] ?>"></label>
                            <button type="submit" class="btn btn-outline-success p-1 m-1 rounded-1" style="font-size: 15px;">
                                <a><i class="fa-solid fa-reply-all"></i></a>
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