<?php

class Account
{
	private $balance;

	public function __construct($balance)
	{
		if ($balance >= 0) {
			$this->balance = $balance;
		}		
	}

	public function setBalance($balance)
	{
		if ($balance >= 0) {
			$this->balance = $balance;
		}
	}

	public function getBalance()
	{
		return $this->balance;
	}
}

class BusinessAccount extends Account
{

}

class SavingAccount extends Account
{
	private $interestRate;
}

$businessAcc = new BusinessAccount(10000);
print_r($businessAcc->getBalance());
?>