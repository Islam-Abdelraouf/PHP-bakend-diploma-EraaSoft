<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//title ---
echo "10. Tip Calculator";
draw_break_line();
add_line_space();

//input section ---
$billAmount = 50;
$tipPercent = 15;

//logic section ---
$tipamount = 50 * ($tipPercent / 100);
$totalamount = $billAmount + $tipamount;


//output section ---
echo "Bill amount: $$billAmount";
add_line_space();

echo "Tip ($tipPercent%): $tipamount";
add_line_space();

echo "Total amount:  $$totalamount";
