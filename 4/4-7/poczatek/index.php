<?php

//Przygotowanie interfejsu

interface Database {
  public function openConnection();
  public function prepareQuery();
}

//Implementacja interfejsu dla klasy MySQL

class MySQL implements Database {
  public function openConnection() {
    echo 'Przygotowuję zapytanie do bazy MySQL<br>';
  }
  public function prepareQuery() {
    echo 'Otwieram połączenie z bazą MySQL<br>';
  }
}
//Implementacja interfejsu dla klasy SQLite

class SQLite implements Database {
  public function openConnection() {
    echo 'Przygotowuję zapytanie do bazy SQLite<br>';
  }
  public function prepareQuery() {
    echo 'Otwieram połączenie z bazą SQLite<br>';
  }
}

/* Tworząc nowy obiekt danej klasy używamy nazw metod zdefiniowanych w interfejsie
  nie martwiąc się tutaj o szczegóły ich implementacji
*/

//Nowy obiekt klasy SQLite 
$db1 = new SQLite();
$db1->openConnection(); // Nazwa metody z interfejsu
$db1->prepareQuery(); // Nazwa metody z interfejsu

//Nowy obiekt klasy MySQL
$db2 = new MySQL();
$db2->openConnection(); // Nazwa metody z interfejsu
$db2->prepareQuery(); // Nazwa metody z interfejsu

?>