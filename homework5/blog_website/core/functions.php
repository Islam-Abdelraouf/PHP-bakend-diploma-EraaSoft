<?php

//  function to print out arrays in a better view
function pre_print_r($arr)
{
    echo "<br> <pre>";
    print_r($arr);
    echo "</pre> <br>";
}

//  function to check if the server requested ($method)
//  param1 => $_SERVER (to avoid PHP mess detector error)
//  param1 => $method: $POST or $GET
//  returns true if (request_method == $method)
//  or return false
function is_server_method($server, $method)
{
    return (isset($server['REQUEST_METHOD']) &&
        $server['REQUEST_METHOD'] == $method) ? true : false;
}

//  function to check if the post's input exists
//  returns true of false
function is_input_received($request, $input)
{
    // return (isset($request[$input]) && !empty($request[$input])) ? true : false;
    return (!empty($request[$input])) ? true : false;
}

//  function to sanitize the string-type input values
//  param => $input: user input (string)
//  returns the input after sanitization
function sanitize($input)
{
    return htmlentities(htmlspecialchars(trim($input)));
}

//  function to jump between pages
//  param => $location: location of destination page
//  returns none
function jump_to($location)
{
    header("location: $location");
}

// function to add the title section for all pages
// param => $title: page title
// returns HTML of the title section
function addTitleSection($title)
{
    $html = <<<HTML

                <div class='row-fluid bg-dark'>
                    <div class='border text-center p-0 mx-auto shadow-sm' style="background-color:rgb(244, 249, 253);">
                        <h1 class="display-1 text-uppercase"> {$title} </h1>
                    </div> 
                </div>
            HTML;

    echo $html;
}

// function to count the total number of stored posts
// param => none
// returns number of stored posts
function postsTotalCount(){
    $dbaseFile = "../database/posts.json";
    $postsArr = json_decode(file_get_contents($dbaseFile),1);
    return count($postsArr);
}