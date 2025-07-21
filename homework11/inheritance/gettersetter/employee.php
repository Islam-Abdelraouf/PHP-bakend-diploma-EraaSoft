<?php

class Employee
{
    public $firstName;
    public $lastName;
    public $email;
    public $phone;

    private $password;


    public function fullName()
    {
        return $this->firstName . " " . $this->lastName;
    }

    public function setPassword($pass)
    {
        $this->password = sha1($pass);
    }

    public function getPassword()
    {
        return $this->password;
    }
}
