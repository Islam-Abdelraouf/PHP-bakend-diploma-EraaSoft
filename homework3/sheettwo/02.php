<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "02. (Array) remove duplicate & sort Asscending";
draw_break_line();
add_line_space();

// Input section ---
$numbers = [1, 1, 1, 2, 2, 3, 6, 7, 7, 4, 5, 5];

// Logic section ---
//declaration of a buffer array - to save the non-repeated numbers
$arrTemp = [];

//outer loop - to check all numbers in the loop
for ($i = 0; $i < count($numbers); $i++) {

    //a flag declered to announce the duplicate status of a number
    $isRepeated = false;

    //inner loop to check if a number was saved before
    for ($j = 0; $j < count($arrTemp); $j++) {
        if ($arrTemp[$j] == $numbers[$i]) {
            //announce the number is repeated
            $isRepeated = true;
            //exit the inner loop
            break;
        }
    }
    //to same the number if not repeated || not reapeated
    if ($isRepeated == false) {
        // $arrTemp[] = $num; // method 01
        array_push($arrTemp, $numbers[$i]); // method 02
    }
}
//sorting the array
sort($arrTemp, SORT_NATURAL);

//output section ---
echo "<pre>";
print_r($arrTemp);
echo "</pre>";

//include header
include('inc/footer.php');
