<?php

function bookAuthorYear($author, $year = 1900)
{
    echo $year;
    echo "\n";
    echo $author;
    echo "\n";
}

$y = 1920;
$a = "Tolstoy";
bookAuthorYear("Dan Brown", 2015);
bookAuthorYear($a, $y);


function getAuthor()
{
    return "Charles Dickens";
}

bookAuthorYear(getAuthor());
