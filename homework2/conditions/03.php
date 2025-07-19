<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "3. Voting Eligibility";
draw_break_line();
add_line_space();

//inputs section ---
$age = 16 ;

//logic section ---
if($age >= 18){
    $msgText = "You are eligible to vote!" ;
}else{
    $msgText = "Sorry, you are not eligible to vote." ;
}

//output section ---
echo $msgText ;
