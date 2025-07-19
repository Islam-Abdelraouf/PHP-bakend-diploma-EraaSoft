<?php

require_once('product.php');

$product1 = new Product;
$name1 = $product1->name = "Apple";
$price1 = $product1->price = 85; // USD
$brand1 = $product1->brand = "Family Farms";
$image1 = $product1->image = "img/Apple.jpg";
$description1 = $product1->description = "Apples are a widely enjoyed fruit known for their crisp texture, sweet-tart flavor, and vibrant colors, ranging from red to green to yellow. green to yellow. ranging from red to green to yellow.";
$discount1 = 20; // %
$product1->tax = 10; // %



$product2 = new Product;
$name2 = $product2->name = "Watermelon";
$price2 = $product2->price = 55; // USD
$brand2 = $product2->brand = "Family Farms";
$image2 = $product2->image = "img/watermelon.jpg";
$description2 = $product2->description = "Watermelon is a sweet, commonly consumed fruit of summer, usually as fresh slices, diced in mixed fruit salads, or as juice. Watermelon juice can be blended with other fruit juices or made into wine.";
$discount2 = 20; // %
$product2->tax = 10; // %



$product3 = new Product;
$name3 = $product3->name = "Dragon Fruit";
$price3 = $product3->price = 120; // USD
$brand3 = $product3->brand = "Family Farms";
$image3 = $product3->image = "img/dragonfruit.jpg";
$description3 = $product3->description = "Dragon fruit, also known as pitaya or pitahaya, is a tropical fruit known for its vibrant appearance and mildly sweet taste, appearance and mildly sweet taste, often compared to a blend of pear kiwi.";
$discount = 20; // %
$product3->tax = 10; // %
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <h1 class=" display-3 text-center mt-5">Products Page!</h1>
    <div class="container py-5">
        <div class="row justify-content-center g-4">
            <div class="card py-2" style="max-width: 30%; ">
                <h5 class="card-title text-center"><?= $name1 ?? "" ?> - <?= $brand1 ?? "" ?></h5>
                <img src="<?= $image1 ?? "" ?>" class=" w-100">
                <p class="card-text"><?= $description1 ?? "" ?>.</p>
                <p class="card-text text-danger"><span class="">Price USD </span><?= $price1 ?? "" ?></p>
                <p class="card-text text-primary"><span>Price After Discount USD </span><?= $product1->getPriceAfterDiscount($discount) ?? "" ?></p>
                <p class="card-text text-success"><span>Net Price after taxes USD </span><?= $product1->getFinalPrice($discount) ?></p>
                <a href="#" class="btn btn-primary text-center">Add To Cart</a>
            </div>
            <div class="card py-2" style="max-width: 30%; margin-left: 3px;">
                <h5 class="card-title text-center"><?= $name2 ?? "" ?> - <?= $brand2 ?? "" ?></h5>
                <img src="<?= $image2 ?? "" ?>" class=" w-100">
                <p class="card-text"><?= $description2 ?? "" ?>.</p>
                <p class="card-text text-danger"><span class="">Price USD </span><?= $price2 ?? "" ?></p>
                <p class="card-text text-primary"><span>Price After Discount USD </span><?= $product2->getPriceAfterDiscount($discount) ?? "" ?></p>
                <p class="card-text text-success"><span>Net Price after taxes USD </span><?= $product2->getFinalPrice($discount) ?></p>
                <a href="#" class="btn btn-primary text-center">Add To Cart</a>
            </div>
            <div class="card py-2" style="max-width: 30%; margin-left: 3px;">
                <h5 class="card-title text-center"><?= $name3 ?? "" ?> - <?= $brand3 ?? "" ?></h5>
                <img src="<?= $image3 ?? "" ?>" class=" w-100">
                <p class="card-text"><?= $description3 ?? "" ?>.</p>
                <p class="card-text text-danger"><span class="">Price USD </span><?= $price3 ?? "" ?></p>
                <p class="card-text text-primary"><span>Price After Discount USD </span><?= $product3->getPriceAfterDiscount($discount) ?? "" ?></p>
                <p class="card-text text-success"><span>Net Price after taxes USD </span><?= $product3->getFinalPrice($discount) ?></p>
                <a href="#" class="btn btn-primary text-center">Add To Cart</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>