<?php

require_once('bankaccount.php');
require_once('subaccount.php');

$child = new SubAccount;
$parent = new BankAccount;


$child->balance=30000;

echo "<pre>";
var_dump($child, $parent);
echo "</pre>";