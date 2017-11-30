<?php

class Vehicle
{
	public function move()
	{
		echo 'Jedziemy';
	}
}

class PoweredVehicle extends Vehicle
{
	public function turnOnEngine()
	{
		echo 'Uruchamiamy silnik';
	}
}

class Car extends PoweredVehicle
{

}

class Bike extends Vehicle
{

}

$vehicle = new Bike();
$vehicle->turnOnEngine();
echo '<br>';
$vehicle->move();

?>