<?php
//Przykład luźnego sprzężenia pomiędzy obiektami do którego należy dążyć,
//aby kod był bardziej elastyczny. Klasa EventReader w metodzie list Events używa interfejsu
//InputStream, który to interfejs implementują klasy File, NetworkConnection i Database

interface InputStream {

}

class File implements InputStream {

}

class NetworkConnection implements InputStream {

}

class Database implements InputStream {

}

class EventReader
{
	public function listEvents(InputStream $eventList)
	{
		echo 'Odczytuję zawartosc listy wydarzen: ';
		print_r($eventList);
	}
}

$eventReader = new EventReader();
$eventReader->listEvents(new File());
echo'<br>';
$eventReader->listEvents(new NetworkConnection());

?>