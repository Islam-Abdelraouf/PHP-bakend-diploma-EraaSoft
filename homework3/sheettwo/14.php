<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "14. nested foreach loop prints elements of a multidimensional array";
draw_break_line();
add_line_space();

//inputs section ---
$students = array(
    array("name" => "John", "age" => 20, "grade" => "A"),
    array("name" => "Mary", "age" => 22, "grade" => "B"),
    array("name" => "Tom", "age" => 18, "grade" => "A")
);


//logic section ---
$results = "";
foreach ($students as $subArray) {
    foreach ($subArray as $k => $v) {
        $results .= "array($k => $v)";
        $results .= "\n";
    }
}

//output section ---
echo ("<pre>$results</pre>");


//include header
include('inc/footer.php');
