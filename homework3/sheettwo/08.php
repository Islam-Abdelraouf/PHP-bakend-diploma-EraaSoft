<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "08. Factorial using for loop";
draw_break_line();
add_line_space();

//inputs section ---
$num = 4;
$results = $num;

//logic section ---
for($i=1; $i<$num; $i++){
    $results *= ($num-$i);
}

//output section ---
echo "The factorial of $num is $results" ;

//include header
include('inc/footer.php');