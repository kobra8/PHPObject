<?php

interface Database 
{
	public function openConnection();
	public function prepareQuery();
}

?>