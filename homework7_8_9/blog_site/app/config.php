<?php

session_start();

define("URL", "http://127.0.0.1/homework7_8_9/blog_site/");

if (! isset($_SESSION['auth'])) {
    header("location:" . URL . "admin/auth/login.php");
}
