<!-- FOOTER SECTION -->
<?php include 'inc/header.php'; ?>

<!-- NAVBAR SECTION -->
<?php include 'inc/nav.php'; ?>

<!-- INCLUDE SECTION -->
<?php include 'core/functions.php'; ?>
<?php include 'core/csv-functions.php'; ?>
<?php include 'database/products.php'; ?>

<!-- Body Contents -->

<!-- Page Title -->
<?php addTitleSection("Products List"); ?>


<?php
//Get data from Json file//
$postsJson = file_get_contents("database/products.json");
$postsArray = json_decode($postsJson, true);
?>



<!-- CONTACT US FORM -->
<div class="container mt-5">
    <div class="row">
        <form action="" method="">
            <div class="form-control">
                <button type="submit" value="add product" class="btn btn-primary col-12">Add New Product</button>
            </div>
        </form>
    </div>
    <div class="row mt-3">
        <table class="table table-hover table-bordered">
            <!-- table header -->
            <thead>
                <tr>
                    <?php foreach ($postsArray[0] as $key => $val): ?>
                        <th scope="col"><?= strtoupper($key); ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <!-- table body -->
                <?php foreach ($postsArray as $product): ?>
                    <tr>
                        <?php foreach ($product as $key => $val): ?>
                            <td><?= $product[$key]; ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>


<!-- FOOTER SECTION -->
<?php include 'inc/footer.php'; ?>