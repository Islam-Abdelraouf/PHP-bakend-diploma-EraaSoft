<?php

//cancelled because it was returning the directory of the hosting file
//$folder = basename(__DIR__); 

//get the hosting script name
$hostDir = $_SERVER['SCRIPT_FILENAME']; 

//get the directory path of the hosting script
$hostDir = dirname($hostDir); 

//get the directory name of the hosting script
$hostDir = basename($hostDir); 

switch ($hostDir) {
    case "views":
        $rootpath = "../";
        break;
    case "inc":
        $rootpath = "../";
        break;
    default:
        $rootpath = "";
        break;
}
