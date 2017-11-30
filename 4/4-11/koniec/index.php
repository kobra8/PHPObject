<?php

abstract class Shape
{
	public abstract function draw();
}

final class Rectangle extends Shape
{
	public function draw()
	{
		echo 'rysujemy prostokat';
	}
}

class Square extends Rectangle
{
	
}

?>