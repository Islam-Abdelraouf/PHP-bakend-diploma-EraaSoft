<?php

//check if the required inputs are empty    
function requiredIsEmpty($input)
{
    return empty($input);
}

//check if the user entered an email address
function is_email($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    } else
        return true;
}

//check the minimum length of the srting input
function minLength($input, $length)
{
    return (strlen($input) < $length) ? true : false;
}

//check the maximum length of the srting input
function maxLength($input, $length)
{
    return (strlen($input) > $length) ? true : false;
}

//validate the username input
// required && >3 && <25
function validateName($name)
{
    $arr = [];
    if (requiredIsEmpty($name)) {
        $arr[] = "Name is required";
    } elseif (minLength($name, 3)) {
        $arr[] = "Name must be more than 3 chars";
    } elseif (maxLength($name, 25)) {
        $arr[] = "Name must be less than 25 chars";
    }

    return $arr;
}

//validate the email input
// required && >10 && <50
function validateEmail($email)
{
    $arr = [];
    if (requiredIsEmpty($email)) {
        $arr[] = "Email is required";
    } elseif (! is_email($email)) {
        $arr[] = "This email address is incorrect";
    } elseif (minLength($email, 10)) {
        $arr[] = "Email must be more than 3 chars";
    } elseif (maxLength($email, 50)) {
        $arr[] = "Email must be less than 25 chars";
    }

    return $arr;
}

//validate the password input
// required && >=8
function validatePassword($pass)
{
    $arr = [];
    if (requiredIsEmpty($pass)) {
        $arr[] = "Password is required";
    } elseif (minLength($pass, 8)) {
        $arr[] = "Password minimum length 8 chars";
    }

    return $arr;
}

//validate the matching of 2 passwords
function validatePasswordMatching($pass1, $pass2)
{
    $arr = [];
    if ($pass1 === $pass2) {
        return $arr;
    }
    $arr[] = "New Password is not matching!";
    return $arr;
}