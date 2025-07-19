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


//updateCsvBulk csv file (return true  or false)
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
    return false; //in case of any error
}


//updatePasswordByUserId csv file (return array  or false)
function updatePasswordByUserId($file, $userId, $oldpassword, $newpassword)
{
    if (($fileHandle = fopen($file, "r")) !== false) {
        $contentsArray = [];
        $userFound = false;
        //$errors = [];

        while (($row = fgetcsv($fileHandle)) != false) {
            if ($row[0] == $userId) { //if userid found
                $userFound = true;
                //echo "csvPassword".$row[3]."<br>";
                //echo "enteredPassword".sha1($oldpassword)."<br>";
                //die();
                if ($row[3] == sha1($oldpassword)) { //if old password matching
                    echo "password matching";
                    //die();
                    $row[3] = sha1($newpassword); //modify the row password
                } else {
                    //echo "password not matching";
                    //die();
                    return "Old password is incorrect!";
                }
            }
            $contentsArray[] = $row; //add the $row data to the content array
        }
        if ($userFound == true) {
            fclose($fileHandle);
            if (updateCsvBulk($file, $contentsArray) == true) {
                return true;
            } else {
                return "Error updating password!";
            }
        } else {
            return "user was not found!";
        }
    }
    return "Error updating password!"; //in case of any error
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

//findUserByEmail (return user row array or false)
function isEmailExist($file, $userEmail)
{
    if (($fileHandle = fopen($file, "r")) !== false) {
        while (($row = fgetcsv($fileHandle)) != false) {
            if ($row[2] == $userEmail) {
                fclose($fileHandle);
                return $row; //array of id, name, email, password(sha1)
            }
        }
    }
    return false;
}


//findUserByEmail (return user row array or false)
function checkLoginCredentials($file, $userEmail, $password)
{
    if (($UserRow = isEmailExist($file, $userEmail)) !== false) {
        //checking password
        if ($UserRow[3] == sha1($password)) {
            array_pop($UserRow);
            return $UserRow;
        }
    }
    return false;
}

//registerNewUser (return true or error string message)
function registerNewUser($file, $name, $email, $password)
{
    $userArray = array(createUserid(), $name, $email, $password);

    if (($usersFile = fopen($file, "a+")) !== false) {
        if (fputcsv($usersFile, $userArray) !== false) {
            fclose($usersFile);
            return true;
        }
    }
    fclose($usersFile);
    return false;
}

function createUserid()
{
    return count_users() + 1;
}

function count_users()
{
    $counter = 0;
    $file = fopen("../data/user.csv", "r");
    rewind($file);

    while (($row = fgetcsv($file)) != false) {
        $counter++;
    }
    fclose($file);
    return $counter;
}
