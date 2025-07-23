<?php

require_once('enum.php');


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
    <h1 class="text-center pt-5">New Bank Account Registration</h1>


    <div class=" col-10 my-5 p-5 mx-auto rounded-2 border shadow-sm">
        <form action="index.php"
            method="POST"
            class="form">


            <!-- Branch Name -->
            <div class="mb-3">
                <label for="publisher" class=" form-label">Branch Name</label>
                <select class="form-select" name="brach-name">

                    <option selected>Select a Branch Name</option>
                    <?php foreach (branchList::cases() as $option): ?>
                        <option value="<?= $option->value ?>"><?= $option->value ?></option>
                    <?php endforeach; ?>

                </select>
            </div>
            <!-- Account Type -->
            <div class="mb-3">
                <label for="title" class=" form-label">Account Type</label>
                <select class="form-select" name="account-type">

                    <option selected>Select an account type</option>
                    <?php foreach (accTypeList::cases() as $option): ?>
                        <option value="<?= $option->value ?>"><?= $option->value ?></option>
                    <?php endforeach; ?>

                </select>
            </div>
            <!-- Client Name -->
            <div class="mb-3">
                <label for="publisher" class=" form-label">Client Name</label>
                <input type="text" name="client-name" class=" form-control" placeholder="Enter full client name">
            </div>
            <!-- Deposite -->
            <div class="mb-3">
                <label for="publisher" class=" form-label">Deposit</label>
                <input type="text" name="deposit" class=" form-control" placeholder="Enter deposit amount">
            </div>
            <!-- Submit butoon -->
            <div class="mb-3">
                <button type="submit"
                    name="save"
                    value="save"
                    class="btn btn-primary form-control p-2 mt-3 rounded-1"> Register Account
                </button>
            </div>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>