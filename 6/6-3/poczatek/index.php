<?php

class ReportPrinter
{
	public function print($filetype)
	{
		if ($filetype == 'XML') {
			echo 'Zapisuje raport do pliku XML';
		} elseif ($filetype == 'JSON') {
			echo 'Zapisuje raport do pliku JSON';
		}
	}
}

$rp = new ReportPrinter();
$rp->print('XML');

?>