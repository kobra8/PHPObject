<?php

//Przykład zasady podstawienia Liskov
//Obiekt danej klasy może być zastąpiony obiektem klasy dziedziczącej
//W tym wypadku funkcja move() jest dostępna w klasie dziedziczącej od  i VehicleWithoutEngine
// mimo tego, że jest zdefiniowana w jeszcze wyższej klasie Vehicle

class Vehicle {
	private $vehicle;

	public function __construct($vehicle) {
		$this->vehicle = $vehicle;
	}

	public function move() {
		echo 'Jedzie '.$this->vehicle;
	}
}

class VehicleWithEngine extends Vehicle {
	public function turnOnEngine() {
		echo 'Uruchamiamy silnik<br>';
	}
}

class VehicleWithoutEngine extends Vehicle {

}

class Car extends VehicleWithEngine {

}

class Bike extends Vehicle {

}

$vehiclePowered = new Car('auto');
$vehiclePowered ->turnOnEngine();
$vehiclePowered ->move();
echo'<br>';
$vehicleWithoutPower = new Bike('rower');
$vehicleWithoutPower ->move();

?>