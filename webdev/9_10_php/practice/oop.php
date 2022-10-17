<?php

include_once "Person.php";
include_once "Author.php";

$bhavik = new Person("Bhavik", "Knight", 1992);
$bhavik->setLastName("Bhagat");
print($bhavik->getFirstName());
print($bhavik->getLastName());
print($bhavik->getBirthYear());
print(Person::AVG_LIFE_SPAN . PHP_EOL);

# make another class
$ws = new Author("William", "Shakespeare", 1894);
print($ws->getCompleteName());
print($ws->getLastName() . "was popular in " . Author::getCenturyAuthorWasPopular());
