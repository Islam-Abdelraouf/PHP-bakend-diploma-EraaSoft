<?php

// nice var dump
function dumpDie($output, $exit = false)
{
    echo "<pre>";
    var_dump($output);
    echo "</pre>";
    if ($exit == true) {
        die('exited by developer');
    }
}

// redirection function
function redirect($path)
{
    header("location: $path");
    die();
}
