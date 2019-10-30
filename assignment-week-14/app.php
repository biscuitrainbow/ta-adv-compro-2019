<?php
require_once './Car.php';
require_once './SuperCar.php';
require_once './Person.php';
require_once './LazyPerson.php';

function runAllFor($list, $km) {
	foreach($list as $item) {
		// to make sure $item has runFor method
		if($item instanceof Runnable) {
			$item->runFor($km);
		}
	}
}

function showAllInfo($list) {
	foreach($list as $item) {
		// if $item is an instance of ShowInfo
		// call showLongInfo();
		if($item instanceof ShowInfo) {
			$item->showLongInfo();
		}
		// if $item is an instance of Runnable
		// show runningDistance;
		else if($item instanceof Runnable) {
			echo "{$item->runningDistance()}\n";
		}
		// other case print unknow information
		else {
			echo "Unknown information.\n";
		}
	}
}

$car = new Car('Adam', 1800);
$superCar = new SuperCar('Bob', 8000);
$person = new Person('Cindy');
$lazyPerson = new LazyPerson('Donald');

$car->engineStart();
$superCar->engineStart();

$runningList = [$car, $superCar, $person, $lazyPerson];

runAllFor($runningList, 20);

$car->engineStop();
$superCar->engineStop();

showAllInfo($runningList);
