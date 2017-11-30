<?php

class File
{
	private $filename;

	public function __construct($filename)
	{
		$this->filename = $filename;
	}

	public function getFilename()
	{
		return $this->filename;
	}

	public function validateData($data)
	{
		echo 'Walidacja danych ' . $data;
	}
}

?>