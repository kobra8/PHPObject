<?php

abstract class Shape 
{
	public abstract function getArea();
}

class Rectangle extends Shape 
{
	private $a;
	private $b;

	public function __construct($a, $b)
	{
		$this->a = $a;
		$this->b = $b;
	}

	public function getArea()
	{
		return $this->a * $this->b;
	}
}

class Circle extends Shape
{
	private $radius;

	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	public function getArea()
	{
		return 3.14 * pow($this->radius, 2);
	}
}

$shape = new Rectangle(2, 4);
echo $shape->getArea();

?>