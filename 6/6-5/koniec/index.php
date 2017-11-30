<?php

interface Message 
{
	public function prepareMessage();
	public function send();
}

interface SMSMessage
{
	public function getPhoneNumber();
}

interface EmailMessage
{
	public function getEmail();
}

class SMS implements Message, SMSMessage
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

class Email implements Message, EmailMessage
{
	public function prepareMessage()
	{
		echo 'Przygotowuje wiadomosc<br>';
	}

	public function getEmail()
	{
		echo 'Sprawdzam adres email<br>';
	}

	public function send()
	{
		echo 'Wysylam wiadomosc<br>';
	}
}

?>
