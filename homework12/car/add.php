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
    <h1 class="text-center pt-5">Select a Car</h1>


    <div class=" col-10 my-5 p-5 mx-auto rounded-2 border shadow-sm">
        <form action="index.php"
            method="POST"
            class="form">


            <!-- Maker -->
            <div class="mb-3">
                <label for="title" class=" form-label">Car Maker</label>
                <select class="form-select" name="make">

                    <option selected>Select a Car Maker</option>
                    <?php foreach (carMake::cases() as $option): ?>
                        <option value="<?= $option->value ?>"><?= $option->value ?></option>
                    <?php endforeach; ?>

                </select>
            </div>
            <!-- Model -->
            <div class="mb-3">
                <label for="publisher" class=" form-label">Model</label>
                <input type="text" name="model" class=" form-control" placeholder="Enter Car Model">
            </div>
            <!-- Color -->
            <div class="mb-3">
                <label for="publisher" class=" form-label">Color</label>
                <select class="form-select" name="color">

                    <option selected>Select a Car Color</option>
                    <?php foreach (carColor::cases() as $option): ?>
                        <option value="<?= $option->value ?>"><?= $option->value ?></option>
                    <?php endforeach; ?>

                </select>
            </div>
            <!-- Year -->
            <div class="mb-3">
                <label for="publisher" class=" form-label">Production year</label>
                <input type="text" name="year" class=" form-control" placeholder="Enter Production Year">
            </div>
            <!-- Submit butoon -->
            <div class="mb-3">
                <button type="submit"
                    name="save"
                    value="save"
                    class="btn btn-primary form-control p-2 mt-3 rounded-1"> Select Car
                </button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>