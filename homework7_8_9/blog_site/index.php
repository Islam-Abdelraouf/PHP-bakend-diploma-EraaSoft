<?php
require_once "database/db-config.php";
mysqli_select_db($conn,  dbaseName);
$sqlQuery = "SELECT `site_name` FROM `site_info` LIMIT 1;";
$results = mysqli_query($conn, $sqlQuery);
$blogInfo = mysqli_fetch_assoc($results);
?>

<!-- Header -->
<?php require('inc/header.php'); ?>
<!-- Navigation -->
<?php require('inc/nav.php'); ?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1 class="display-2"><?= $blogInfo['site_name'] ?></h1>
                    <span class="subheading">Still alive! keep writing!</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content-->
<?php
    require_once "database/db-config.php";
    mysqli_select_db($conn,  dbaseName);
    $sqlQuery =    "SELECT  posts.id AS 'post_id', 
                            posts.title, 
                            posts.publisher, 
                            posts.content, 
                            posts.image,
                            posts.created_at,
                            users.id, 
                            users.username 
                        FROM `posts`
                        INNER JOIN `users`
                        ON users.id = posts.user_id
                        ORDER BY posts.id DESC;";

    $results = mysqli_query($conn, $sqlQuery);
?>

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-8">
            <!-- Post preview-->
            <?php while ($postInfo = mysqli_fetch_assoc($results)): ?>
                <div class="post-preview bg-light p-4 mb-3">
                    <h2 class="post-title"><?= $postInfo['title']; ?></h2>
                    <p class="post-meta"> Created By: <?= $postInfo['username']; ?></p>
                    <img class="card-img-top rounded-1" src="<?= $postInfo['image']; ?>" alt="">
                    <p class="post-subtitle" style="text-align: justify;">
                        <?= substr($postInfo['content'], 0, 200) . "... "; ?>
                        <span><a id="readmore" href="post.php?id=<?= $postInfo['post_id']; ?>">read more</a></span>
                    </p>

                    <p class="post-meta">
                        Published by
                        <a href="#!"><?= $postInfo['publisher']; ?></a>
                        on <?= date("d-M-Y", strtotime($postInfo['created_at'])); ?>
                    </p>
                </div>
            <?php endwhile; ?>
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
        </div>
    </div>
</div>
<!-- Footer -->
<?php require 'inc/footer.php'; ?>