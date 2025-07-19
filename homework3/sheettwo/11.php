<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "11. foreach prints associative array keys and values";
draw_break_line();
add_line_space();

//inputs section ---
$person = array("name" => "John", "age" => 30, "city" => "New York");
$results1 = "";
$results2 = "";

//logic section ---
foreach ($person as $key => $value) {
    $results1 .= "Key=>$key, Value=>$value<br>";
    $results2 .= "$key=($value)<br>";
}

//output section ---
echo "METHOD 1:";
draw_break_line();
add_line_space();
echo $results1;
add_line_space(2);
echo "METHOD 2:";
draw_break_line();
add_line_space();
echo $results2;


//include header
include('inc/footer.php');
