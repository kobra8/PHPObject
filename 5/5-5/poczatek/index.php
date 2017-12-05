<?php
class Flat {
	private $size;

	public function __construct($size)
	{
		$this->size = $size;
	}
}

class BlockOfFlats{
	private $flats = [];

	public function addFlat($size) {
		$this->flats[] = new Flat($size);
	}

	public function getFlats() {
		foreach ($this->flats as $flat) {
			print_r($flat);
		}
	}
}

$block = new BlockOfFlats();
$block->addFlat('M2');
$block->addFlat('M3');
$block->addFlat('M4');

$block->getFlats();
?>