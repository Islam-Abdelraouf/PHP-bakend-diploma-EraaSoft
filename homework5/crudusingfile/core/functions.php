<?php

function pre_print_r(array $arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    return true;
}

//  function to check the server request method
//  returns true of false
function is_server_method($server, $method)
{
    return (isset($server['REQUEST_METHOD']) &&
        $server['REQUEST_METHOD'] == $method) ? true : false;
}

//  function to check if the post's input exists
//  returns true of false
function is_input_received($request, $input)
{
    return (isset($request[$input]) && !empty($request[$input])) ? true : false;
}

//  function to recondition the input value
//  returns $input after recondition
function sanitize($input)
{
    return htmlentities(htmlspecialchars(trim($input)));
}

//  function to jump between pages
//  returns none
function jump_to($location)
{
    header("location: $location");
}