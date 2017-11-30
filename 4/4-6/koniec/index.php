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

	public function __construct($balance, $interestRate)
	{
		parent::__construct($balance);
		$this->interestRate = $interestRate;
	}
}

$savingAcc = new SavingAccount(4000, 0.05);
print_r($savingAcc);

?>