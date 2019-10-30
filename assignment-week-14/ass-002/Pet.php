<?php
require_once '../Runnable.php';
require_once '../ShowInfo.php';

class Pet implements Runnable, ShowInfo
{
    private $distance = 0;
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function showInfo()
    {
        printf("%10s %s", "Name:", $this->name);
    }


    function showLongInfo()
    { 
        printf("%10s %s\n", "Name:", $this->name);
        printf("%10s %d km\n", "Running Distance:", $this->runningDistance());
    }


    function runningDistance()
    {
        return $this->distance;
    }


    function runFor($km)
    {
        $this->distance += $km;
    }
}
