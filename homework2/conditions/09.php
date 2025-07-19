<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "9. BMI Calculator";
draw_break_line();
add_line_space();

//inputs section ---
$weight = 70; // in kg
$height = 1.75; // in meters


//logic section ---
//BMI equation
$bmi = $weight / (pow($height, 2));
$bmi = round($bmi, 2);

//Below 18.5: Underweight
if ($bmi < 18.5) {
    $results = "Underweight";
}

//18.5-24.9: Normal weight
if ($bmi >= 18.5 && $bmi <= 24.9) {
    $results = "Normal weight";
}

//25-29.9: Overweight
if ($bmi >= 25 && $bmi <= 29.9) {
    $results = "Overweight";
}

//30 and above: Obesity
if ($bmi >= 30) {
    $results = "Obesity";
}

//output section ---
echo "Your BMI is $bmi ($results)";
