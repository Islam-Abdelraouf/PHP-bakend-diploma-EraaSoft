<?php

class BankAccount
{

    public $accountNumber;
    public $balance=20000;
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
