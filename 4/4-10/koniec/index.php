<?php

class Person
{
	private $name;
	private static $counter;

	public function __construct($name)
	{
		$this->name = $name;
		self::$counter++;
	}

	public static function getCounter()
	{
		return self::$counter;
	}
}

$person1 = new Person('Tomek');
$person2 = new Person('Pawel');
$person3 = new Person('Janek');
print Person::getCounter();

?>