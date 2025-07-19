<?php
    include_once('app/func-main.php');
    session_start();
    if (isset($_SESSION['errors'])) {
        $errors = [];
        $errors = $_SESSION['errors'];
    }
    if (isset($_SESSION['success'])) {
        $success = [];
        $success = $_SESSION['success'];
    }
?>

<!-- Header -->
<?php require('inc/header.php'); ?>
<!-- Navigation -->
<?php require('inc/nav.php'); ?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Contact Me</h1>
                    <span class="subheading">Have questions? I have answers.</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                <div class="my-5">

                    <?php if (isset($success)): ?>
                        <?php foreach ($success as $k=>$v): ?>
                        <div class="m-0 mt-3 p-2 alert alert-success rounded-1">
                            <p class="m-0">
                                <?php if($v!==null) echo $v; ?>
                            </p>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <?php if (isset($errors)): ?>
                        <?php foreach ($errors as $k=>$v): ?>
                            <div class="m-0 mt-1 p-2 alert alert-danger rounded-1">
                                <p class="m-0">
                                    <?php if($v!==null) echo $v; ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <form action="actions/messages.php" method="post">
                        <div class="form-floating">
                            <input class="form-control" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" name="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" name="phone" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" />
                            <label for="phone">Phone Number</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" name="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                        </div>
                        <br />

                        <!-- Submit Button-->
                        <button class="btn btn-primary text-uppercase value=" submit" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php unset($_SESSION['errors']); ?>
<?php unset($_SESSION['success']); ?>

<!-- Footer -->
<?php require 'inc/footer.php'; ?>