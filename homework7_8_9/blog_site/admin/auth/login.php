<?php
//----------------------------------Login--------------------------
//-----------------------------------main--------------------------
session_start();
define("URL", "http://127.0.0.1/homework7_8_9/blog_site/");

if (isset($_SESSION['auth'])) {
    header("location:" . URL . "admin");
}

if(isset($_SESSION['username']) ){
    $username = $_SESSION['username']?? "" ;
    unset($_SESSION['username']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../../css/styles.css" rel="stylesheet" />
    <link href="../../css/extra.css" rel="stylesheet" />
</head>

<body>

    <div class="w-50 mx-auto ">
        <h1 class=" display-3 border  rounded-pill my-5 p-4 text-center">
            Login
        </h1>
    </div>

    <div class="w-50 mx-auto ">
        <div class=" col-12">
            <form action="<?=URL?>admin/actions/auth/login.php" method="post" class="border rounded-0 p-3 mb-3">

                <?php include_once('../inc/alert.php'); ?>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" value="<?= $username ?? "" ?>" class=" form-control rounded-pill">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class=" form-control rounded-pill">
                </div>
                <div class="d-grid mb-3">
                    <button name="login" value="login" class="btn btn-primary rounded-pill">Login</button>
                </div>

            </form>
        </div>
    </div>

    <!-- Footer-->
    <footer class="border-top">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2023</div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../../js/scripts.js"></script>

</body>

</html>