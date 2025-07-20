<?php

class SubAccount extends BankAccount
{

    public $timePeriod;
    public $additionalServices = [];
    
    public function penalty($times)
    {
        for ($i = 1; $i <= $times; $i++) {
            echo "Penalty.";
            echo "<br>";
        }
    }
}
