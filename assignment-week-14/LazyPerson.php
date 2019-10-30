<?php
require_once './ShowInfo.php';
require_once './Person.php';

class LazyPerson extends Person implements ShowInfo
{
	function runFor($km)
	{
		fprintf(STDERR, "I am a lazy man, I don't run.\n");
	}
	
	function showInfo()
	{
		echo "I am too lazy to answer you.\n";
	}
	
	function showLongInfo()
	{
		$this->showInfo();
	}
}
