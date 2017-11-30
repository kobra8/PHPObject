<?php

class Product 
{
	public function getProduct()
	{
		return 'Dane produktu';
	}
}

class Customer
{
	public function getCustomer()
	{
		return 'Dane klienta';
	}
}

class Payment
{
	public function getPayment()
	{
		return 'Dane platnosci';
	}
}

/**
* Fasada zamowienia
*/
class Order
{
	private $product;
	private $customer;
	private $payment;

	public function __construct()
	{
		$this->product = new Product();
		$this->customer = new Customer();
		$this->payment = new Payment();
	}

	public function prepareOrder()
	{
		echo $this->product->getProduct() . '<br>';
		echo $this->customer->getCustomer() . '<br>';
		echo $this->payment->getPayment() . '<br>';
		echo 'Zamowienie gotowe!';
	}
}

$order = new Order();
$order->prepareOrder();

?>