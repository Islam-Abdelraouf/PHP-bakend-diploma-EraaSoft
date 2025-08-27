<?php


require_once 'product.php';
require_once 'CartItem.php';
require_once 'ShoppingCart.php';

$shoppingCart = new ShoppingCart;

$iphone5 = new Product(1, 'IPHONE 5', 52000);
$iphone6 = new Product(2, 'IPHONE 6', 72000);
$iphoneX = new Product(3, 'IPHONE X', 92000);
$OppoMH1 = new Product(4, 'OPPO MH1', 31000);
$OppoMS2 = new Product(5, 'OPPO MS2', 42000);

$cartItem1 = new CartItem($iphone5, 2);
$cartItem2 = new CartItem($iphone6, 1);
$cartItem3 = new CartItem($OppoMS2, 3);
?>

<Form>
</Form>