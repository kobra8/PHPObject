<?php

class Person
{
	private $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
}

$person1 = new Person('Tomek');

?>