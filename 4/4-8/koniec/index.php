<?php

interface Database 
{
	public function openConnection();
	public function prepareQuery();
}

class MySQL implements Database
{
	public function openConnection()
	{
		echo 'Otwieram polaczenie do bazy MySQL<br>';
	}

	public function prepareQuery()
	{
		echo 'Przygotowuje zapytanie do bazy MySQL<br>';
	}
}

class SQLite implements Database
{
	public function openConnection()
	{
		echo 'Otwieram polaczenie do bazy SQLite<br>';
	}

	public function prepareQuery()
	{
		echo 'Przygotowuje zapytanie do bazy SQLite<br>';
	}
}

$db = new SQLite();
$db->openConnection();
$db->prepareQuery();

?>