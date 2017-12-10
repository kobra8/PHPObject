<?php
//Zasada odwrócenia zależności
//klasa wysokiego poziomu(podstawowej logiki biznesowej) nie zależy od klasy
//niskiego poziomu(klasa techniczna np. wysyłanie, odbieranie, zapisywanie)
//W tym celu mozna użyć interfejsu lub klasy abstrakcyjnej
class User
{

}

interface NotificationService {
	public function send(User $user, $message);
}

class SMS implements NotificationService {
	public function send(User $user, $message) {
		echo 'Wysyłam powiadomienie SMS: '.$message;
	}
}

class Email implements NotificationService {
	public function send(User $user, $message) {
		echo 'Wysyłam wiadomość email: '.$message;
	}
}

class NotificationManager {
	public function sendNotification(User $user, NotificationService $notificationService, $message)
	{
		$notificationService->send($user, $message);
	}
}

$nm = new NotificationManager();
$nm->sendNotification(new User(), new SMS(), 'Witam serdecznie szystkich :)');
echo'<br>';
$nm->sendNotification(new User(), new Email(), 'Hello wszyscy w mailingu :)');

// Wersja przed zmianą


// class User
// {

// }

// class SMS
// {
// 	public function send()
// 	{
// 		echo 'Wysylam powiadomienie SMS';
// 	}
// }

// class NotificationManager
// {
// 	public function sendNotification(User $user, $message)
// 	{
// 		$sms = new SMS();
// 		$sms->send($user, $message);
// 	}
// }

// $nm = new NotificationManager();
// $nm->sendNotification(new User(), 'witam');

?>