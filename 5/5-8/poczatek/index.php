<?php
//Interfejs to rodzaj kontraktu
interface Moveable {
	public function move();
}

interface Powered {
	public function turnOnEngine();
}

// W klasach implementujących interfejs muszą być zaimplementowane wszystkie jego składniki
//Może być implementowanych wiele interfejsów
class Car implements Powered, Moveable {
 public function turnOnEngine() {
	 echo 'Uruchamiamy silnik w samochodzie';
 }
 public function move() {
	 echo 'Jedziemy samochodem';
 }

}

class Bike implements Moveable {
	public function move() {
		echo 'Jedziemy rowerem';
	}
}

$vehicle = new Car();
$vehicle->turnOnEngine();
echo '<br>';
$vehicle->move();
echo '<br>';
$velo = new Bike();
$velo->move();

?>