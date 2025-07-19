<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "13. for loop prints the multiplication table of 8";
draw_break_line();
add_line_space();

//inputs section ---
$tableNumber = 8;
$results = "";


//logic section ---
for ($i = 0; $i <= 10; $i++) {
    $results .= "$tableNumber x $i = ". $tableNumber*$i ."<br>";
}

//output section ---
echo "$results";


//include header
include('inc/footer.php');