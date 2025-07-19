<?php

require_once '../app/func-db.php';
require_once '../database/db-config.php';

// delete database if exist
deleteDB($conn,  dbaseName);

// create database if not exist
createDB($conn,  dbaseName);

// create table ( site_info )
$tblFields = "(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `site_name` VARCHAR(50) NOT NULL,
    `phone` VARCHAR(20) NOT NULL,
    `linkedin` VARCHAR(100) NOT NULL,
    `facebook` VARCHAR(100) NOT NULL,
    `twitter` VARCHAR(100) NOT NULL,
    `bio` VARCHAR(300) NOT NULL 
);";
createTbl($conn,  dbaseName, "site_info", $tblFields);

// create table ( users )
$tblFields = "(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(80) NOT NULL,
    `username` VARCHAR(80) NOT NULL UNIQUE,
    `password` VARCHAR(75) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";
createTbl($conn,  dbaseName, "users", $tblFields);

// create table ( messages )
$tblFields = "(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `user_id` INT NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `phone` VARCHAR(20) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `content` VARCHAR(200) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";
createTbl($conn,  dbaseName, "messages", $tblFields);
AddFKeyConstraint($conn,  dbaseName, "messages", "user_id", "users", "id");

// create table ( posts )
$tblFields = "(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `user_id` INT NOT NULL,
    `title` VARCHAR(75) NOT NULL,
    `content` VARCHAR(1500) NOT NULL,
    `image` VARCHAR(50) NOT NULL,
    `publisher` VARCHAR(50) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";
createTbl($conn,  dbaseName, "posts", $tblFields);
AddFKeyConstraint($conn,  dbaseName, "posts", "user_id", "users", "id");

require_once 'seeder.php';
