<?php
require_once './Vehicle.php';

class Car extends Vehicle
{
	private $pistonv;
	
	function __construct($owner, $pistonv)
	{
		parent::__construct($owner);
		$this->pistonv = $pistonv;
	}
	
	function pistonVolume()
	{
		return $this->pistonv;
	}
	
	function fuelUsed()
	{
		return ($this->runningDistance() / 20) * ($this->pistonv / 1000);
	}
	
	function showLongInfo()
	{
		if(parent::showLongInfo()) {
			printf("Fuel used:        %6.2f L\n",
				$this->fuelUsed());
		} else {
			return false;
		}
		return true;
	}
}
