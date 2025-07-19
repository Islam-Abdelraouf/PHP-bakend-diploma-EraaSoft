<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//title---
echo "03. Temperature Converter <br> ";
draw_break_line();
add_line_space();

//input section ---
$celsius = 25;

//logic section ---
$f = (($celsius * (9 / 5)) + 32);

//output section ---

//output 1. using unicode text
echo "using unicode text <br>" ;
echo $celsius . "°C" . " is equal to " . $f . "°F" ;

echo "<br><br>" ;

//output 2. using the HTML "entities" symbols
echo "using the HTML 'entities' symbols <br>" ;
echo $celsius . "&deg;C" . " is equal to " . $f . "&deg;F" ;
