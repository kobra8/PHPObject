<?php

abstract class ReportPrinter
{
	public abstract function print();
}

class XMLReportPrinter extends ReportPrinter
{
	public function print()
	{
		echo 'Zapisuje raport do pliku XML';
	}
}

class JSONReportPrinter extends ReportPrinter
{
	public function print()
	{
		echo 'Zapisuje raport do pliku JSON';
	}
}



$rp = new XMLReportPrinter();
$rp->print();

?>