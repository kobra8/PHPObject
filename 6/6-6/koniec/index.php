<?php

class User
{

}

interface NotificationService
{
	public function send();
}

class SMS implements NotificationService
{
	public function send()
	{
		echo 'Wysylam powiadomienie SMS';
	}
}

class NotificationManager
{
	public function sendNotification(User $user, NotificationService $notificationservice, $message)
	{
		$notificationservice->send($user, $message);
	}
}

$nm = new NotificationManager();
$nm->sendNotification(new User(), new SMS() ,'witam');

?>