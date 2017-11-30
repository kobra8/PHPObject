<?php

class File
{

}

class EventReader
{
	public function listEvents(File $eventList)
	{
		echo 'Odczytuje zawartosc listy wydarzen: ';
		print_r($eventList);
	}
}

?>