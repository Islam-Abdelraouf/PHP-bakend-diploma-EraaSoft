<?php

session_start();
define("URL", "http://127.0.0.1/homework7_8_9/blog_site/");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['logout'] === 'logout') {
        session_destroy();
        header("location:" . URL . "admin/auth/login.php");
    }
}else{
    header("location:" . URL . "admin");
}
