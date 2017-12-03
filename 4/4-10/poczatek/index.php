<?php

class Person
{
	private $name;

	//Ta zmienna i metoda statyczna liczy ilość instancji
	private static $counter;

	public function __construct($name)
	{
		$this->name = $name;
		self::$counter++;
	}

	public static function getCounter() {
		return self::$counter;
	}
}

$person1 = new Person('Tomek');
$person2 = new Person('Paweł');
$person3 = new Person('Janek');

//Metody statyczne wywoływane są na klasie, nie potrzebują instancji
print Person::getCounter();

?>