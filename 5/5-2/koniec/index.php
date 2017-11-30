<?php

class Product
{
	private $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}
}

class Cart
{
	private $products = [];

	public function addProduct(Product $product)
	{
		$this->products[] = $product;
	}

	public function listProducts()
	{
		foreach ($this->products as $product) {
			echo $product->getName() . '<br>';
		}
	}
}

$cart = new Cart();
$product1 = new Product('Laptop');
$product2 = new Product('Kabel USB');
$cart->addProduct($product1);
$cart->addProduct($product2);
$cart->listProducts();

?>