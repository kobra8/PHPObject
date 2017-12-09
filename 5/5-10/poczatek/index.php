<?php
// Przykład spójności (Cohesion) klasy, czyli każda klasa odpowiada za konkrtną rzecz
//i nie mieszamy ze sobą funkcji o odmiennych zadaniach w jednej klasie
class File {
	private $filename;

	public function __construct($filename) {
		$this->filename = $filename;
	}

	public function getFilename() {
		return $this->filename;
	}

}

class DataValidator {
	private $data;
	
	public function __construct($data) {
		$this->data = $data;
	}

	public function validateData() {
		echo 'Walidacja danych: ' . $this->data;
	}
}
$file = new File('Lista_plac_2017_12');
$validator = new DataValidator($file->getFilename());
$validator->validateData();

?>