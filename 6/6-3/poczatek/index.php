<?php
//Zasada otwarte/zamknięte

// Rozwiązanie z dziedziczeniem po klasie abstrakcyjnej

abstract class ReportPrinter {
	public abstract function printFile();
}

class XmlReportPrinter extends ReportPrinter {
	public function printFile() {
		echo 'Zapisuję raport do pliku XML';
	}
}
	
class JsonReportPrinter extends ReportPrinter {
	public function printFile() {
		echo 'Zapisuję raport do pliku JSON';
	}
}

// Rozwiązanie z interfejsem
// interface ReportPrinter {
// 	public function printFile();
// }

// class XmlReportPrinter implements ReportPrinter {
// 	public function printFile() {
// 		echo 'Zapisuję raport do pliku XML';
// 	}
// }

// class JsonReportPrinter implements ReportPrinter {
// 	public function printFile() {
// 		echo 'Zapisuję raport do pliku JSON';
// 	}
// }

$xmlrp = new XmlReportPrinter();
$xmlrp->printFile();
echo'<br>';
$jsonrp = new JsonReportPrinter();
$jsonrp->printFile();

?>