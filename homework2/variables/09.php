<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//title ---
echo "09. Discount Calculator";
draw_break_line();
add_line_space();

//input section ---
$originalPrice = 100;
$discountPercent = 20;

//logic section ---
$finalprice = 100 * (1 - (20 / 100));


//output section ---
echo "Original price: $$originalPrice";
add_line_space();

echo "Discount:  $discountPercent%";
add_line_space();

echo "Final price: $$finalprice";
