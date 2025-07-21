<?php

class Customer extends User {
    public $customerNumber;
    public $city;
    public $state;
    public $country;

    public function location()
    {
        $address = "Country is : {$this->country}";
        $address .= "<br>State is : {$this->state}";
        $address .= "<br>City is : {$this->city}";

        return $address;
    }
}