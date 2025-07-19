<?php
//Admin Nav
?>

<?php

$pageName = basename($_SERVER['SCRIPT_NAME'], '.php');

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Home Page -->
                <li class="nav-item">
                    <a class="nav-link <?= $pageName == "index" ? "active" : "" ?>"
                        href="<?= URL ?>admin/index.php">
                        Home
                    </a>
                </li>
                <!-- Messages Page -->
                <li class="nav-item">
                    <a class="nav-link <?= $pageName == "messages" ? "active" : "" ?>"
                        href="<?= URL ?>admin/messages/messages.php">
                        Messages
                    </a>
                </li>
                <!-- Dropdown Posts Menu (posts) -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle 
                                <?= $pageName == "create" ? "active" : "" ?>
                                <?= $pageName == "posts" ? "active" : "" ?>
                                "
                        href="#" role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Posts
                    </a>
                    <ul class="dropdown-menu">
                        <!-- Add Post Page -->
                        <li><a class="dropdown-item"
                                href="<?= URL ?>admin/posts/create.php">
                                Add New
                        </a></li>
                        <!-- All Posts Page -->
                        <li><a class="dropdown-item"
                                href="<?= URL ?>admin/posts/posts.php">
                                View All
                        </a></li>
                    </ul>
                </li>
                <!-- Dropdown Posts Menu (Users) -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle 
                                <?= $pageName == "create" ? "active" : "" ?>
                                <?= $pageName == "users" ? "active" : "" ?>
                                "
                        href="#" role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Users
                    </a>
                    <ul class="dropdown-menu">
                        <!-- Add Post Page -->
                        <li><a class="dropdown-item"
                                href="<?= URL ?>admin/users/create.php">
                                Add New
                        </a></li>
                        <!-- All Posts Page -->
                        <li><a class="dropdown-item"
                                href="<?= URL ?>admin/users/users.php">
                                View All
                        </a></li>
                    </ul>
                </li>
                <!-- About Page -->
                <li class="nav-item">
                    <a class="nav-link <?= $pageName == "about" ? "active" : "" ?>"
                        href="<?= URL ?>admin/about.php">
                        About
                    </a>
                </li>
            </ul>
            <div class="text-light">
                <?php include_once('user-greetings.php');?>
            </div>
            <div></div>
            <form action="<?=URL?>admin/auth/logout.php" method="post" class="form">
                <button name="logout" value="logout" class="btn btn-danger p-2" type="submit">logout</button>
            </form>
        </div>
    </div>
</nav>