<?php

//---------------------------------ADMIN DASHBOARD----------------------------


// <!-- config -->
require_once('../app/config.php');
require_once('../database/db-config.php');

// <!-- functions -->
require_once('../app/func-main.php');
require_once('../app/func-db.php');

// <!-- Header -->
require_once('inc/header.php');
// <!-- Navigation -->
require_once('inc/nav.php');


//get number of messages
$numMessages = getRowsTotalNumber($conn, dbaseName, "messages");
//get number of users
$numUsers = getRowsTotalNumber($conn, dbaseName, "users");
//get number of posts
$numPosts = getRowsTotalNumber($conn, dbaseName, "posts");
?>


<!-- Main Content-->
<h1 class=" display-3 text-center mt-5">Admin Dashboard</h1>
<div class="row d-flex justify-content-center my-5 px-5 text-center gap-2">
    <div class="card rounded-2 bg-light py-3" style="width: 18rem;">
        <div class="card-body"
            style="background-color: rgb(<?= rand(200, 255); ?>, <?= rand(50, 150); ?>, <?= rand(180, 255); ?>);">
            <h5 class="card-title">USERS</h5>
            <p class=" display-1 text-center"><?= $numUsers ?></p>
        </div>
    </div>
    <div class="card rounded-2 bg-light py-3" style="width: 18rem;">
        <div class="card-body"
            style="background-color: rgb(<?= rand(200, 255); ?>, <?= rand(200, 250); ?>, <?= rand(100, 180); ?>);">
            <h5 class="card-title">MESSAGES</h5>
            <p class=" display-1 text-center"><?= $numMessages ?></p>
        </div>
    </div>
    <div class="card rounded-2 bg-light py-3" style="width: 18rem;">
        <div class="card-body"
            style="background-color: rgb(<?= rand(200, 255); ?>, <?= rand(100, 180); ?>, <?= rand(100, 200); ?>);">
            <h5 class="card-title">POSTS</h5>
            <p class=" display-1 text-center"><?= $numPosts ?></p>
        </div>
    </div>
</div>

<!-- Footer -->
<?php require_once('inc/footer.php'); ?>