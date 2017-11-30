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

}

class DataValidator
{
	private $data;

	public function __construct($data)
	{
		$this->data = $data;
	}

	public function validateData()
	{
		echo 'Walidacja danych ' . $this->data;
	}
}

?>