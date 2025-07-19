<?php


//readCsvDataArr csv file (return array  or false)
function readCsvDataArr($file)
{
    if (($fileHandle = fopen($file, "r")) !== false) {
        $contentsArray = [];
        while (($row = fgetcsv($fileHandle)) !== false) {
            $contentsArray[] = $row;
        }
        fclose($fileHandle);
        return $contentsArray; //arrays of arrays of id, name, email, password(sha1)
    }
    return false; //in case of any error
}


//updateCsvBulk csv file (return true  or a string error message)
function updateCsvBulk($file, $dataArray)
{
    if (($fileHandle = fopen($file, "w")) !== false) {
        foreach ($dataArray as $row) {
            fputcsv($fileHandle, $row);
        }
        fclose($fileHandle);
        return true; //in case of successfully updated
    }
    fclose($fileHandle);
    return "Database error, please try again later!"; //in case of CSV file error
}


//updatePasswordByUserId csv file (return true or a string error message)
function updatePasswordByUserId($file, $userId, $oldpassword, $newpassword)
{
    if (($fileHandle = fopen($file, "r")) !== false) {
        $contentsArray = [];
        $userFound = false;

        while (($row = fgetcsv($fileHandle)) != false) {

            //if userid is matching with the current row
            if ($row[0] == $userId) {
                $userFound = true;
                if ($row[3] == sha1($oldpassword)) { //if old password matching
                    $row[3] = sha1($newpassword); //modify the row password
                    fclose($fileHandle);
                } else {
                    fclose($fileHandle);
                    return "Old password is incorrect!";
                }
            }
            //add the $row data to the content array
            $contentsArray[] = $row;
            if ($userFound == true) break;
        }
        if ($userFound == true) {
            if (updateCsvBulk($file, $contentsArray) == true) {
                return true;
            } else {
                return "Error updating password!";
            }
        } else {
            return "user was not found!";
        }
    }
    fclose($fileHandle);
    return "Database error, please try again later!"; //in case of CSV file error
}

//findUserById (return user row array or false)
function isUserIdExist($file, $userId)
{
    if (($fileHandle = fopen($file, "r")) !== false) {
        while (($row = fgetcsv($fileHandle)) != false) {
            if ($row[0] == $userId) {
                fclose($fileHandle);
                return $row; //array of id, name, email, password(sha1)
            }
        }
    }
    return false;
}

//findUserByEmail (return user row array or a string error message)
function isEmailExist($file, $userEmail)
{
    if (($fileHandle = fopen($file, "r")) !== false) {
        while (($row = fgetcsv($fileHandle)) != false) {
            if ($row[2] == $userEmail) {
                fclose($fileHandle);
                return $row; //array of id, name, email, password(sha1)
            }
        }
        fclose($fileHandle);
        return "The entered email doesn't exist!";
    }
    //fclose($fileHandle);
    return "Database error, please try again later!"; // error opening the CSV file
}


//findUserByEmail (return user row array or string error message)
function checkLoginCredentials($file, $userEmail, $password)
{
    if (is_array($UserRow = isEmailExist($file, $userEmail))) {

        //checking password
        if ($UserRow[3] == sha1($password)) {
            array_pop($UserRow);
            return $UserRow;
        }
        return "The entered password is incorrect";
    }
    return $UserRow; //(error received from function isEmailExist)
}

//registerNewUser (return true or error string message)
function registerNewUser($file, $name, $email, $password)
{
    $userArray = array(createUserid($file), $name, $email, $password);

    if (($usersFile = fopen($file, "a+")) !== false) {
        if (fputcsv($usersFile, $userArray) !== false) {
            fclose($usersFile);
            return true;
        }
    }
    fclose($usersFile);
    return false;
}


function createUserid($file)
{
    $counter = 0;
    $file = fopen($file, "r");

    while (($row = fgetcsv($file)) != false) {
        $counter++;
    }
    fclose($file);
    return $counter + 1;
}


//submit a message messageSubmit (return true or error string message)
function messageSubmit($file, $name, $email, $message)
{
    $userArray = array(createMessageid($file), $name, $email, $message);

    if (($usersFile = fopen($file, "a+")) !== false) {
        if (fputcsv($usersFile, $userArray) !== false) {
            fclose($usersFile);
            return true;
        }
        return "Error submitting message, please try again later!";
    }
    fclose($usersFile);
    return "Database error, please try again later!"; // error opening the CSV file
}


function createMessageid($file)
{
    $counter = 0;
    $file = fopen($file, "r");

    while (($row = fgetcsv($file)) != false) {
        $counter++;
    }
    fclose($file);
    return $counter + 1;
}
