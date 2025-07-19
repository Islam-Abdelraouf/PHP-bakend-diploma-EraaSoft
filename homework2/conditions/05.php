<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "5. Simple Authentication";
draw_break_line();
add_line_space();

//inputs section ---
$username = "user123";
$password = "pass456";
$correctUsername = "user123";
$correctPassword = "pass456";


//logic section ---
if (($username == $correctUsername) && ($password == $correctPassword)) {
    $login_results = "Login successful!" ;
}else{
    $login_results = "Invalid username or password." ;
}

//output section ---
echo $login_results;
