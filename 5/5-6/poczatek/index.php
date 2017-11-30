<?php

class Vehicle
{
	public function turnOnEngine()
	{
		echo 'Uruchamiamy silnik';
	}

	public function move()
	{
		echo 'Jedziemy';
	}
}

class Car extends Vehicle
{

}

?>