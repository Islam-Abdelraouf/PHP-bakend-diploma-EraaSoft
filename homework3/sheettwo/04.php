<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "04. Replacing multiple of numbers with Fizz, Buzz";
draw_break_line();
add_line_space();

//inputs section ---
$num1 = 3;
$num2 = 5;
$replace1 = "Fizz";
$replace2 = "Buzz";
$replace3 = "FizzBuzz";
$arr = [];

//logic section ---
for ($i = 1; $i <= 50; $i++) {
    if ($i % $num1 == 0 && $i % $num2 == 0) {//"FizzBuzz"
        $results = $replace3;
    } elseif ($i % $num1 == 0) {//"Fizz"
        $results = $replace1; 
    } elseif ($i % $num2 == 0) {//"Buzz"
        $results = $replace2; 
    } else {
        $results = $i;
    }
    $arr[] = $results;
}

//output section ---
echo "<pre>";
print_r($arr);
echo "</pre>";

//include header
include('inc/footer.php');
