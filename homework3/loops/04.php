<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "04. Multiplication Table";
draw_break_line();
add_line_space();

//input sction ---
$numTable = 7;
$results = "";

//logic section ---
for ($i = 0; $i <= 10; $i++) {
    $results .= "$numTable x $i = " . $numTable*$i;
    $results .= "<br>";
}


//output section ---
echo $results;



//include footer
include('inc/footer.php');
