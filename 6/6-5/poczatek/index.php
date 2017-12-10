<?php
// Zasada segregacji interfejsów
//Klasy implementują tylko te metody, które są im potrzebne

//W PHP nie można deklarować zmiennych w interfejsach -> możemy użyć klasy abstrakcyjnej
abstract class MessageType {
	protected $messageType;
}

interface Message {
	public function prepareMessage();
	public function send();
}

interface SMSMessage {
	public function getPhoneNumber();
}

interface EmailMessage {
	public function getEmail();
}

class SMS extends MessageType implements Message, SMSMessage {
	public function __construct($messageType){
		$this->messageType = $messageType;
	}
	public function prepareMessage() {
		echo 'Przygotowuję wiadomość ' .$this->messageType;
		echo '<br>';
	}

	public function getPhoneNumber() {
		echo 'Sprawdzam numer telefonu<br>';
	}

	public function send() {
		echo 'Wysyłam wiadomość ' .$this->messageType;
		echo '<br>';
	}
}

class Email extends MessageType implements Message, EmailMessage {
	public function __construct($messageType){
		$this->messageType = $messageType;
	}
	public function prepareMessage() {
		echo 'Przygotowuję wiadomość ' .$this->messageType;
		echo '<br>';
	}

	public function getEmail() {
		echo 'Sprawdzam adres e-mail<br>';
	}

	public function send() {
		echo 'Wysyłam wiadomość ' .$this->messageType;
		echo '<br>';
	}
}

$sms = new SMS('SMS');
$sms -> prepareMessage();
$sms -> getPhoneNumber();
$sms -> send();

$email = new Email('Email');
$email -> prepareMessage();
$email -> getEmail();
$email -> send();

?>
