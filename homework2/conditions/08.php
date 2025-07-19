<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "8. Day of Week";
draw_break_line();
add_line_space();

//inputs section ---
$dayNumber = 3;

//logic section ---
switch ($dayNumber) {
    case 1:
        $dayName = "Monday";
        break;
    case 2:
        $dayName = "Tuesday";
        break;
    case 3:
        $dayName = "Wednsday";
        break;
    case 4:
        $dayName = "Thursday";
        break;
    case 5:
        $dayName = "Friday";
        break;
    case 6:
        $dayName = "Saturday";
        break;
    case 7:
        $dayName = "Sunday";
        break;

}

//output section ---
echo "Day $dayNumber is $dayName.";
