<?php

class Account
{
    private string $accType;
    private string $acctNumber;
    private string $customerName;
    private string $branchName;
    private float $balabce;
    private string $timeStamp;


    // getRandNumber
    private function getRandNumber(): int
    {
        return time() . rand(10000, 1000000);
    }


    // account number
    public function setAccountNumber(): void
    {
        $accTypeInWords = explode(" ", $this->accType);
        $prefix = $accTypeInWords[0];
        $this->acctNumber = "acc-" . $prefix . "-" . $this->getRandNumber();
    }
    public function getAccountNumber(): string
    {
        return $this->acctNumber;
    }


    // Customer name
    public function setCustomerName(string $strName): void
    {
        $this->customerName = $strName;
    }
    public function getCustomerName(): string
    {
        return $this->customerName;
    }


    // Branch name
    public function setBranchName(string $strBranch): void
    {
        $this->branchName = $strBranch;
    }
    public function getBranchName(): string
    {
        return $this->branchName;
    }

    public function getBalance(): string
    {
        return "EGP" . number_format($this->balabce, 0, ',');
    }

    // CONSTRUCT FUNCTION
    public function __construct(
        string $branchName,
        string $accType,
        string $customerName,
        string $balabce
    ) {
        // account type
        $this->accType = $accType;

        // account number (Automatically create)
        $this->setAccountNumber();

        // customer name
        $this->customerName = $customerName;

        // branch name
        $this->branchName = $branchName;

        // balance
        $this->balabce = $balabce;

        // issue date
        $this->timeStamp = date('d-M-Y');
    }

    //get account details
    public function displayAccountInfo()
    {
        $information = "<B>Branch Name: </B>" . $this->branchName . ".<br>";
        $information .= "<B>Account Number: </B>" . $this->acctNumber . ".<br>";
        $information .= "<B>Account Type: </B>" . $this->accType . ".<br>";
        $information .= "<B>Client Name: </B>" . $this->customerName . ".<br>";
        $information .= "<B>Issue Date: </B>" . $this->timeStamp ;
        return $information;
    }
}
