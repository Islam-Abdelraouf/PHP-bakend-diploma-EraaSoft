
<pre>

-- -----------------------------------------
-- TABLES SECTION --------------------------
-- -----------------------------------------

-- Create Database
CREATE Database `school`;

-- USE Database
USE `school`;

-- create table school
CREATE TABLE 
	`school` (
        `schl_id` INT PRIMARY KEY AUTO_INCREMENT,
        `schl_name` VARCHAR(50) NOT NULL,
        `schl_phone` VARCHAR(25),
        `schl_address` VARCHAR(190)
    );

-- create table classes
CREATE TABLE 
    `classes` (
        `class_id` INT PRIMARY KEY AUTO_INCREMENT,
        `class_number` INT UNIQUE
    );

-- create table teachers
CREATE TABLE
    `teachers` (
        `teac_id` INT PRIMARY KEY AUTO_INCREMENT,
        `teac_name` VARCHAR(50) NOT NULL,
        `teac_phone` VARCHAR(25),
        `teac_image` VARCHAR(50) NOT NULL, -- link to the photo file
        `teac_address` VARCHAR(190),
        `teac_date_of_birth` DATETIME NOT NULL
    );

-- create table employee
CREATE TABLE
    `employees` (
        `empl_id` INT PRIMARY KEY AUTO_INCREMENT,
        `empl_name` VARCHAR(50) NOT NULL,
        `empl_phone` VARCHAR(25) NOT NULL,
        `empl_image` VARCHAR(50) NOT NULL, -- link to the photo file
        `empl_address` VARCHAR(190),
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

-- create table courses
CREATE TABLE
    `courses` (
        `cour_id` INT PRIMARY KEY AUTO_INCREMENT,
        `cour_name` VARCHAR(100) NOT NULL,
        `cour_price` DECIMAL(10.2) NOT NULL,
        `cour_description` VARCHAR(255) NOT NULL,
        `cour_materials` VARCHAR(25), -- link to the material's pdf file
        `cour_duration` INT -- duration in hours
    );

-- stage level (3rd grade / 5th grade)
CREATE TABLE
    `stages` (
        `stage_id` INT PRIMARY KEY AUTO_INCREMENT,
        `stage_name` VARCHAR(50) NOT NULL
    );

-- courses type
CREATE TABLE 
    `types` (
        `type_id` INT PRIMARY KEY AUTO_INCREMENT,
        `type_name` VARCHAR(50) NOT NULL
    );

-- create table students
CREATE TABLE
    `students` (
        `stud_id` INT PRIMARY KEY AUTO_INCREMENT,
        `stud_name` VARCHAR(50) NOT NULL,
        `stud_phone` VARCHAR(25),
        `stud_image` VARCHAR(50) NOT NULL, -- link to the photo file
        `stud_address` VARCHAR(190),
        `stud_dob` DATETIME NOT NULL,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

-- create table registration
CREATE TABLE
    `registration` (
        `registration_id` INT PRIMARY KEY AUTO_INCREMENT,
        `total_fees` DECIMAL(10.2) NOT NULL,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

-- create table reghistory
CREATE TABLE
    `reghistory` (
        `reghistory_id` INT PRIMARY KEY AUTO_INCREMENT,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

-- create table users
CREATE TABLE
    `users` (
        `user_id` INT PRIMARY KEY AUTO_INCREMENT,
        `user_name` VARCHAR(50) NOT NULL,
        `user_pass` VARCHAR(50) NOT NULL,
        `user_age` INT NOT NULL
    );

-- -----------------------------------------
-- RELATIONS SECTION -----------------------
-- -----------------------------------------

-- teacher's table FK (schl_id) to school table PK (schl_id)
ALTER TABLE `teachers` 
-- 
ADD `schl_id` INT, -- 1-1 relation
ADD CONSTRAINT `FK_schl_teacher`
FOREIGN KEY (`schl_id`) 
REFERENCES `school` (`schl_id`);

-- teacher's table FK (cour_id) to courses table PK (cour_id)
ALTER TABLE `teachers` 
-- 
ADD `cour_id` INT UNIQUE, -- 1-M relation
ADD CONSTRAINT `FK_cour_teacher` 
FOREIGN KEY (`cour_id`) 
REFERENCES `courses` (`cour_id`);

-- course's table FK (stage_id) to stages table PK (stage_id)
ALTER TABLE `courses` 
-- 
ADD `stage_id` INT, -- 1-M relation
ADD CONSTRAINT `FK_cour_stage` 
FOREIGN KEY (`stage_id`) 
REFERENCES `stages`(`stage_id`);

-- course's table FK (type_id) to types table PK (type_id)
ALTER TABLE `courses` 
-- 
ADD `type_id` INT, -- 1-M relation
ADD CONSTRAINT `FK_cour_type` 
FOREIGN KEY (`type_id`) 
REFERENCES `types`(`type_id`);

-- course's table FK (class_id) to types classes PK (class_id)
ALTER TABLE `courses` 
-- 
ADD `class_id` INT UNIQUE, -- 1-1 relation
ADD CONSTRAINT `FK_cour_class` 
FOREIGN KEY (`class_id`) 
REFERENCES `classes`(`class_id`);

-- class's table FK (schl_id) to school table PK (schl_id)
ALTER TABLE `classes`
-- 
ADD `schl_id` INT, -- 1-M relation
ADD CONSTRAINT `FK_class_school`
FOREIGN KEY (`schl_id`)
REFERENCES `school`(`schl_id`);

-- registration's table FK (empl_id) to employee table PK (empl_id)
ALTER TABLE `registration`
-- 
ADD `empl_id` INT, -- 1-M relation
ADD CONSTRAINT `FK_empl_registration`
FOREIGN KEY (`empl_id`)
REFERENCES `employees`(`empl_id`);

-- registration's table FK (stud_id) to stu table PK (stud_id)
ALTER TABLE `registration`
-- 
ADD `stud_id` INT, -- 1-M relation
ADD CONSTRAINT `FK_registration_stu`
FOREIGN KEY (`stud_id`)
REFERENCES `students`(`stud_id`);


-- reghistory table FK (cour_id) to courses table PK (cour_id)
-- reghistory table FK (registration_id) to registration table PK (registration_id)
ALTER TABLE `reghistory`
-- 
ADD `cour_id` INT, -- 1-M relation
ADD CONSTRAINT `FK_cour_reghistory`
FOREIGN KEY (`cour_id`)
REFERENCES `courses`(`cour_id`),
-- 
ADD `registration_id` INT, -- 1-M relation
ADD CONSTRAINT `FK_registration_reghistory`
FOREIGN KEY (`registration_id`)
REFERENCES `registration`(`registration_id`);


-- DATABASE CRUD OPERATIONS MANIPULATION
INSERT INTO `stages`(`stage_name`) 
VALUES(`first year`);

SELECT * 
FROM `stages` 
WHERE `stages`(`stage_name`) = 'first year';

UPDATE `stages` 
SET `stages`(`stage_name`) = 'second year' 
WHERE `stage_id` = 1;

DELETE FROM `stages` 
WHERE `stage_id` = 1;  

</pre>