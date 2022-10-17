<?php

$lang = 'Python';
$aString = "php is losing steam. $lang is very good replacement.";

echo $aString . "\n";

$place = 2;
echo ("{$place}nd place earned.") . "\n";

$strArray = str_split($aString, 3);
print_r($strArray);
