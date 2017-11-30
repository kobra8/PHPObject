<?php

class Vehicle
{
	public function move()
	{
		echo 'Jedziemy';
	}
}

class VehicleWithEngine extends Vehicle
{
	public function turnOnEngine()
	{
		echo 'Uruchamiamy silnik<br>';
	}	
}

class VehicleWithoutEngine extends Vehicle
{

}

class Car extends VehicleWithEngine
{

}

class Motorbike extends VehicleWithEngine
{

}

class Bike extends VehicleWithoutEngine
{

}

$vehicleWithEngine = new Car();
$vehicleWithEngine->turnOnEngine();
$vehicleWithEngine->move();

$vehicleWithoutEngine = new Bike();
$vehicleWithoutEngine->move();

?>