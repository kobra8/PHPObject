<?php

interface Message 
{
	public function prepareMessage();
	public function getPhoneNumber();
	public function getEmail();
	public function send();
}

class SMS implements Message
{
	public function prepareMessage()
	{
		echo 'Przygotowuje wiadomosc<br>';
	}

	public function getPhoneNumber()
	{
		echo 'Sprawdzam numer telefonu<br>';
	}

	public function send()
	{
		echo 'Wysylam wiadomosc<br>';
	}
}

?>
