<?php
// Wzorzec projektowy Fasada

class Product {
	private $productName;

	public function __construct($productName) {
		$this->productName = $productName;
	}

	public function getProduct()
	{
		return 'Nazwa produktu: ' .$this->productName;
	}
}

class Customer {
	private $customerName;
	
	public function __construct($customerName) {
		$this->customerName = $customerName;
	}

	public function getCustomer()
	{
		return 'Dane klienta: ' .$this->customerName;
	}
}

class Payment {
	//private $paymentDetails;

	public function __construct($paymentDetails) {
		$this->paymentDetails = $paymentDetails;
	}

	public function getPayment()
	{
		return 'Dane platnosci: ' .$this->paymentDetails;
	}
}
//Fasada

class Order {
	private $product;
	private $customer;
	private $payment;

	public function __construct($productName, $customerName, $paymentDetails) {
		$this->product = new Product($productName);
		$this->customer = new Customer($customerName);
		$this->payment = new Payment($paymentDetails);
	}

	public function prepareOrder() {
	echo	$this->product->getProduct() . '<br>';
	echo	$this->customer->getCustomer() . '<br>';
	echo	$this->payment->getPayment() . '<br>';
		echo'Zamówienie gotowe!';
	}
}

$order = new Order('Klocki Lego', 'Jan Kowalski', 'Visa, 2345 5433 4555 5455');
$order-> prepareOrder();

echo'<br>';

$order2 = new Order('Kawa ziarnista', 'Staszek Rola','Gotówka przy odbiorze');
$order2-> prepareOrder();

//Można też użyć interfejsu
?>
