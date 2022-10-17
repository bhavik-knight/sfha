<?php

class Person
{
    const AVG_LIFE_SPAN = 65;
    private $firstName;
    private $lastName;
    private $birthYear;

    function __construct($first = "", $last = "", $year = "")
    {
        $this->firstName = $first;
        $this->lastName = $last;
        $this->birthYear = $year;

    }

    public function getFirstName()
    {
        return $this->firstName . PHP_EOL;
    }

    public function setFirstName($newName)
    {
        $this->firstName = $newName;
    }

    public function getLastName()
    {
        return $this->lastName . PHP_EOL;
    }

    public function setLastName($newName)
    {
        $this->lastName = $newName;
    }

    public function getBirthYear()
    {
        return $this->birthYear . PHP_EOL;
    }

    public function setBirthYear($year)
    {
        $this->birthYear = $year;
    }

    protected function getFullName()
    {
        return $this->firstName . " " . $this->lastName . PHP_EOL;
    }
}
