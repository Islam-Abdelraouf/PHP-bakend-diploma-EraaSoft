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
<h1 class=" display-3 text-center mt-5">About This Project</h1>
<div class="row w-75 mx-auto d-flex justify-content-center my-5 px-5 text-center">
    <p>
        This project was developed by <b>Islam Abdelraouf</b> as part of the PHP Backend Development Diploma <b>offered by Eaara Soft.</b> The course is being led by <b>Eng. Moustafa Mahfouz</b> (Instructor) with support from <b>Eng. Ziad Mohamed</b> (Assistant Instructor).
    </p>
</div>

<!-- Footer -->
<?php require_once('inc/footer.php'); ?>