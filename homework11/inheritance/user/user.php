<?php


class User
{
    public $firstName;
    public $lastName;
    public $email;
    public $phone;

    public function fullName()
    {
        return $this->firstName . " " . $this->lastName;
    }
}
