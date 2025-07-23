<?php

class Account
{
    private $accountID = null;
    private $accountType = [];
    private $accountNumber;
    private $accountIban;
    private $accountBranch;
    private $accountCustomerName;
    public $accountIssueDate;


    // SET account id
    private function setAccountID()
    {
        return time() . rand(1000, 100000);
    }

    // Account type
    public function setAccountType($accType)
    {
        $this->accountType[] = $accType;
    }
    public function listAccountType()
    {
        return implode(", ", $this->accountType);
    }

    // account number
    public function setAccountNumber(int $numAccount)
    {
        $this->accountNumber = $numAccount;
    }
    public function getAccountNumber()
    {
        return $this->accountNumber ;
    }

    // IBAN number
    public function setAccountIban(string $strIban)
    {
        $this->accountIban = $strIban;
    }
    public function getAccountIban()
    {
        return $this->accountIban ;
    }

    // Customer name
    public function setCustomerName(string $strName)
    {
        $this->accountCustomerName = $strName;
    }
    public function getCustomerName()
    {
        return $this->accountCustomerName ;
    }


    // Branch name
    public function setBranchName(string $strBranch)
    {
        $this->accountBranch = $strBranch;
    }
    public function gettBranchName()
    {
        return $this->accountBranch ;
    }

    // CONSTRUCT FUNCTION
    public function __construct()
    {
        $accId = $this->setAccountID();
        $this->accountID = $accId;
    }
}
