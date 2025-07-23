<?php

require_once('account.php');
require_once('enum.php');

$data = false;
if (isset($_POST['save'])) {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";
    // die;

    $branchName = $_POST['brach-name'];
    $accType = $_POST['account-type'];
    $customerName = $_POST['client-name'];
    $balabce = $_POST['deposit'];
}


// sanitization

// validation
if (
    !empty($branchName) &&
    !empty($accType) &&
    !empty($customerName) &&
    !empty($balabce)
) {
    $data = true;
} else {
    header("location: add.php");
    die;
}


$newAccount = new Account($branchName, $accType, $customerName, $balabce);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class=" col-8 mx-auto text-center mt-3">
            <h1 >Class Encapsulation</h1>
            <h3 >Bank Account Registration</h3>
            <h1></h1>
        </div>

        <div class=" display-6 col-8 mx-auto text-center mt-5 border rounded-1">
            <p><?= "Initial Balance is " . $newAccount->getBalance() ?></p>
        </div>
        <div class=" col-8 mx-auto text-left mt-3 border rounded-1">
            <p class="text-left"><?= $newAccount->displayAccountInfo() ?></p>
        </div>
        <div class=" col-8 mx-auto text-center mt-3">
            <form action="add.php" method="">
                <div class="col-auto mt-5">
                    <button type="submit" class="btn btn-primary mb-3">Register Another Account</button>
                </div>
            </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>

</html>