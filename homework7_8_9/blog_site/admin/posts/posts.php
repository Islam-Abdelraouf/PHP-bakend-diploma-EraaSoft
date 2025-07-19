<?php

//----------------------------Show All posts-----------------------
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
$sqlQuery =    "SELECT  `posts`.`id` AS 'post_id', `posts`.`title`, 
                            `posts`.`publisher`, `posts`.`content`,
                            `users`.`username` AS 'username'
                            FROM `posts`
                            LEFT JOIN `users`
                            ON `users`.`id` = `posts`.`id`
                            ORDER BY `posts`.`id` ASC;";

// select database file
mysqli_select_db($conn,  dbaseName);
// execute query
$results = mysqli_query($conn, $sqlQuery);
?>


<h1 class=" display-3 text-center mt-5">All Posts</h1>

<div class=" col-11 mx-auto">
    <?php include_once('../inc/alert.php'); ?>
    <table class="table mb-5 border table-striped table-hover"
        style=" font-size: 15px;">
        <thead>
            <tr class=" bg-dark text-light text-center">
                <th scope="col">#</th>
                <th scope="col">Post Id</th>
                <th scope="col">User Name</th>
                <th scope="col">Post Title</th>
                <th scope="col">Publisher</th>
                <th scope="col">Post Content</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php $counter = 0; // table index counter
            ?>
            <?php while ($post = mysqli_fetch_object($results)): // fetch posts' rows as objects
            ?>

                <?php
                // assign post object data to variables
                $postId = $post->post_id;
                $postUsername = $post->username;
                $postTitle = $post->title;
                $postPublisher = $post->publisher;
                $postContent = $post->content;
                ?>

                <tr class=" text-center">
                    <th scope="row"><?php echo ++$counter; ?></th>
                    <td><?= $postId ?></td>
                    <td><?= $postUsername ?></td>
                    <td><?= $postTitle ?></td>
                    <td><?= $postPublisher ?></td>
                    <td class="text-justify"><?= $postContent ?></td>
                    <td>
                        <!-- Delete post button -->
                        <form action="<?= URL ?>admin/actions/posts/delete.php" method="post">
                            <input type="hidden" name="id-delete" value="<?= $postId ?>"></label>
                            <button type="submit" class="btn btn-outline-danger p-1 m-1 rounded-1" style="font-size: 15px;">
                                <a><i class="fa-solid fa-trash"></i></a>
                            </button>
                        </form>
                        <!-- Edit post button -->
                        <form action="<?= URL ?>admin/posts/edit.php" method="post">
                            <input type="hidden" name="id-edit" value="<?= $postId ?>"></label>
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