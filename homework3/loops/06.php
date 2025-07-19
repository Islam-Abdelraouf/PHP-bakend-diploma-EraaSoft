<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "06. Simple Pattern";
draw_break_line();
add_line_space();

//input sction ---
$row = 5;
$results = "";


//logic section ---
for ($i = 1; $i <= $row; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        $results .= "*";
    }
    $results .= "<br>";
}


//output section ---
echo $results;


//include footer
include('inc/footer.php');