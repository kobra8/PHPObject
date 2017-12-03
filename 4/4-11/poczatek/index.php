<?php

abstract class Shape
{
	public abstract function draw();
}

// Klasy final nie będzie można rozszerzyć
final class Rectangle extends Shape
{
	public function draw()
	{
		echo 'rysujemy prostokat';
	}
}

?>