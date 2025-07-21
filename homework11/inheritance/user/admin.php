<?php

class Admin extends User
{
    public $isAdmin = true;

    public function checkAdmin()
    {
        return $this->isAdmin ?
            "This user ( " . $this->fullName() . " ) is an admin." :
            "";
    }
}
