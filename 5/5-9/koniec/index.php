<?php

interface InputStream
{

}

class File implements InputStream
{

}

class NetworkConnection implements InputStream
{

}

class Database implements InputStream
{

}

class EventReader
{
	public function listEvents(InputStream $eventList)
	{
		echo 'Odczytuje zawartosc listy wydarzen: ';
		print_r($eventList);
	}
}

$eventReader = new EventReader();
$eventReader->listEvents(new Database());

?>