<?php

// include_once('../app/func-main.php');

// <!------------- DDL OPERATIONS ---------------->

// <!-- create DB if not exist -->   
function createDB($connection, $dbName)
{
    //SQL query statement
    $sqlQuery = "CREATE DATABASE IF NOT EXISTS `$dbName`;";

    //SQL query execution
    $results = mysqli_query($connection, $sqlQuery);
    return $results; //boolean
}
// <!-- delete DB if exist -->
function deleteDB($connection, $dbName)
{
    //SQL query statement
    $sqlQuery = "DROP DATABASE IF EXISTS `$dbName`;";

    //SQL query execution
    $results = mysqli_query($connection, $sqlQuery);
    return $results; //boolean
}
// <!-- create table if not exist -->
function createTbl($connection, $dbName, $tblName, $fieldsStr)
{
    //select dbase name (it wasn't selected during db connection)
    mysqli_select_db($connection, $dbName);
    //SQL query statement
    $sqlQuery = "CREATE TABLE IF NOT EXISTS `$tblName`" . $fieldsStr;

    //SQL query execution
    $results = mysqli_query($connection, $sqlQuery,);
    return $results; //boolean
}
// <!-- delete table if exist -->
function deleteTbl($connection, $dbName, $tblName)
{
    //select dbase name (it wasn't selected during db connection)
    mysqli_select_db($connection, $dbName);
    //SQL query statement
    $sqlQuery = "DROP TABLE IF EXISTS `$tblName`";

    //SQL query execution
    $results = mysqli_query($connection, $sqlQuery,);
    return $results; //boolean
}
// <!-- add foreign key -->
function AddFKeyConstraint($connection, $dbName, $fkTable, $fkField, $pkTable, $pkField, $fkeyConstraintName = "default")
{
    //SQL query statement
    $sqlQuery = "ALTER TABLE `$fkTable` ";
    $sqlQuery .= "ADD CONSTRAINT ";
    $sqlQuery .= $fkeyConstraintName == "default" ? "`FK_{$fkTable}_{$pkTable}` " : "`$fkeyConstraintName` ";
    $sqlQuery .= "FOREIGN KEY (`$fkField`) ";
    $sqlQuery .= "REFERENCES `$pkTable`(`$pkField`);";
    //dumpDie($sqlQuery,1);
    //select dbase name (it wasn't selected during db connection)
    mysqli_select_db($connection, $dbName);

    //SQL query execution
    $results = mysqli_query($connection, $sqlQuery);
    return $results; //boolean
}


// <!------------ DML OPERATIONS -------------------->

// <!-- DATA INSERTION-->
function dataInsert($connection, $dbName, $tblName, $colStr, $valStr)
{
    //select dbase name (it wasn't selected during db connection)
    mysqli_select_db($connection, $dbName);
    //SQL query statement
    $sqlQuery = "INSERT INTO `$tblName` $colStr VALUES $valStr";

    //dumpDie($sqlQuery,1);
    
    //SQL query execution
    //$results = mysqli_query($connection, $sqlQuery);
    //return -1 for error, 0 for no change, 1 for successful insertion 

    mysqli_query($connection, $sqlQuery);

    return mysqli_affected_rows($connection);

}
// <!-- READ -->
// <!-- UPDATE -->
// <!-- DELETE -->

// <!-- GET NO OF ROWS-->
function getRowsTotalNumber($connection, $dbName, $tblName)
{
    //select dbase name (it wasn't selected during db connection)
    mysqli_select_db($connection, $dbName);
    //SQL query statement
    $sqlQuery = "SELECT COUNT(*) AS count FROM `{$tblName}`";
    //SQL query execution
    $results = mysqli_query($connection, $sqlQuery);
    
    $row = mysqli_fetch_assoc($results);

    return $row['count'];
}
