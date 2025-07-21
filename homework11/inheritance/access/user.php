<?php

class User
{
    private $isAdmin = false;
    protected $role = 'Writer';
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getUserInfo()
    {
        return[
            "name"=>$this->name,
            "email"=>$this->email
        ];

        //echo "Name: {$this->name} , email: {$this->email}";
    }
    public function setAdminValue($value)
    {
        if (is_bool($value)) {
            $this->isAdmin = $value;
        }
    }
    public function getAdminValue()
    {
        return $this->isAdmin ? "Admin" : "Standard";
    }
    public function hasAdminAccess()
    {
        return $this->isAdmin ? "true" : "false";
    }
}
