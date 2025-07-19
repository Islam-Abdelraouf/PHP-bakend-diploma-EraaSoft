<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "10. Tax Calculator";
draw_break_line();
add_line_space();

//input sction ---
$income = 55000;

//logic section ---
//tax% conditions
if ($income >= 0 && $income <= 10000) $tax_percent = 10;
if ($income >= 10001 && $income <= 50000) $tax_percent = 15;
if ($income >= 50001 && $income <= 100000) $tax_percent = 20;
if ($income > 100000) $tax_percent = 25;
//tax value calculator
$tax_value = $income * ($tax_percent / 100);


//output section ---
echo "Income: $income";
add_line_space();
echo "Tax amount: $$tax_value ($tax_percent%)";