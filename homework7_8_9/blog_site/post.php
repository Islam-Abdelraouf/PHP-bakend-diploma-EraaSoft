<?php

if (!isset($_GET['id'])) {
    header("location: index.php");
    die;
}
$id = $_GET['id'];

require_once 'database/db-config.php';

//$sqlQuery = "SELECT * FROM `posts` WHERE `id` = $id LIMIT 1;";
$sqlQuery = "   SELECT *, `users`.`username` AS 'username' 
                FROM `posts`
                INNER JOIN `users`
                ON `posts`.`user_id` = `users`.`id`
                WHERE `posts`.`id` = $id LIMIT 1;";

mysqli_select_db($conn,  dbaseName);
$results = mysqli_query($conn, $sqlQuery);
$postInfo = mysqli_fetch_assoc($results);

if (!$postInfo) {
    header("location: index.php");
    die;
}

?>


<!-- Header -->
<?php require('inc/header.php'); ?>
<!-- Navigation -->
<?php require('inc/nav.php'); ?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('<?= $postInfo['image']; ?>')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1><?= $postInfo['title']; ?></h1>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-10">
                <div class="post-preview">
                    <!-- <img class="card-img-top" src="<? //= $postInfo['image']; 
                                                        ?>" alt=""> -->
                    <h2 class="post-title"><?= $postInfo['title']; ?></h2>
                    <p class="post-meta"> Created by: <?= $postInfo['username']."&nbsp"; ?>
                        [<?= date("d-M-Y", strtotime($postInfo['created_at'])); ?>] 
                    </p>
                    <p class="post-meta">
                        Posted by: <?= $postInfo['publisher']; ?>
                    </p>
                    <p style="text-align: justify;"> <?= $postInfo['content']; ?></p>
                </div>
            </div>
        </div>
    </div>
</article>
<!-- Footer -->
<?php require 'inc/footer.php'; ?>