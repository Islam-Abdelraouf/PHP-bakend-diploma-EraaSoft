<!-- REGISTER HANDLER PAGE -->

<?php
//Confirm receiving data // or return back
if (isset($_POST)) {
    $data = $_POST;
} else {
    header("Location:register.php");
}

$username = $data['username'];
$password = $data['pass'];
$passwordR = $data['pass-repeat'];
$email = $data['email'];
$phone = $data['phone'];


//VALIDATION SECTION ---
if (($username == "") ||
    (strlen($password) < 8) ||
    (strlen($passwordR) < 8) ||
    ($password !== $passwordR) ||
    (strlen($email) < 10)||
    (strlen($phone) < 11)
) {
    header("Location:register.php");
}
?>

<!-- including the header contents from the 'inc' folder -->
<?php include('inc/header.php'); ?>


<div class="container py-2">
    <div class="mt-3">
        <!-- <img class="d-block mx-auto mb-2" src="images/login.png" alt="login-icon" height="100" /> -->
        <h3 class="text-center text" style="font-weight: 300; text-transform: uppercase;">Welcome to our website</h3>
    </div>
    <br>
    <div class="mt-3 text-center">
        <h4> Hello <?= " " . $username ?> </h4>
        <p class="mt-4"> Thank you for your trust in our services </p>
        <p class="mt-4"> This is to inform you that we have received the below </p>
        <p class="mt-4"> confidential information and saved it into our database. </p>
        <p class="mt-4"> <span style="font-weight: bold;">Email address:</span> <?= $email ?> </p>
        <p class="mt-4"> <span style="font-weight: bold;">Password:</span> <?= hash( "md5",$password) ?> </p>
        <p class="mt-4"> <span style="font-weight: bold;">Phone Number:</span> <?= $phone ?> </p>

    </div>
</div>

<!-- including the footer contents from the 'inc' folder -->
<?php include('inc/footer.php'); ?>