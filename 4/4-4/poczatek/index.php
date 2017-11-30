<?php

class Account
{
	private $balance;

	public function __construct($balance) {
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

$acc = new Account(300);
print_r($acc->getBalance());
?>