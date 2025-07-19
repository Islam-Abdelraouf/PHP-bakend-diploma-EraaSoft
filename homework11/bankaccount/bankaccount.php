<?php

class BankAccount
{

    public $accountNumber;
    public $balance;
    public $apr;

    public function withDraw()
    {
        echo "withdraw";
    }
    public function deposit()
    {
        echo "Deposit";
    }
}
