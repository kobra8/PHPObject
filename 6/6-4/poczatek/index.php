<?php

class Vehicle
{
	public function turnOnEngine()
	{
		echo 'Uruchamiamy silnik<br>';
	}

	public function move()
	{
		echo 'Jedziemy';
	}
}

class Car extends Vehicle
{

}

class Bike extends Vehicle
{

}

$vehicle = new Bike();
$vehicle->turnOnEngine();
$vehicle->move();

?>