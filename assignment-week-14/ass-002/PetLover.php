<?php
require_once('../Person.php');
require_once('../ShowInfo.php');

class PetLover extends Person implements ShowInfo
{
    public $name;
    public $pets = [];
    public $takenPets = [];

    function __construct($name)
    {
        $this->name = $name;
    }

    function addPet($pet)
    {
        $this->pets[$pet->name] = $pet;
    }

    function takePet($pet_name)
    {
        $this->takenPets[$pet_name] = $this->pets[$pet_name];
    }

    function releasePet()
    {
        $this->takenPets = [];
    }

    function runFor($km)
    {
        parent::runFor($km);

        foreach ($this->takenPets as $pet) {
            $pet->runFor($km);
        }
    }

    function petNames()
    {
        return array_map(
            function ($pet) {
                return $pet->name;
            },
            $this->takenPets
        );
    }

    function showInfo()
    {
        printf("%10s: %s\n", "name", $this->name);
    }

    function showLongInfo()
    {
        printf("%s: %s\n", "Name", $this->name);
        printf("%s: %d km\n", "Runing distance:", $this->runningDistance());
        printf("%s: %s\n", "Taken pets", implode(", ", $this->petNames()));

        foreach ($this->pets as $pet) {
            $pet->showLongInfo();
        }
    }
}
