<?php

class User
{

}

class SMS
{
	public function send()
	{
		echo 'Wysylam powiadomienie SMS';
	}
}

class NotificationManager
{
	public function sendNotification(User $user, $message)
	{
		$sms = new SMS();
		$sms->send($user, $message);
	}
}

$nm = new NotificationManager();
$nm->sendNotification(new User(), 'witam');

?>