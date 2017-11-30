<?php

abstract class Shape
{
	public abstract function draw();
}

class Rectangle extends Shape
{
	public function draw()
	{
		echo 'rysujemy prostokat';
	}
}

?>