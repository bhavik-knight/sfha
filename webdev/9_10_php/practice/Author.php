<?php


class Author extends Person
{
    public static $centuryPopular = "19th";
    private $penName = "Bill";

    public function getPenName()
    {
        return $this->penName . PHP_EOL;
    }

    public function getCompleteName()
    {
        return $this->getFullName() . " aka " . "'$this->penName'" . PHP_EOL;
    }

    public static function getCenturyAuthorWasPopular()
    {
        return self::$centuryPopular . " century" . PHP_EOL;
    }
}
