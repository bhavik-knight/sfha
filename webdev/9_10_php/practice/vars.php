<?php

$num = 42;
var_dump($num);
echo ($num);
echo ("\n");
echo (is_int($num));
echo (is_float($num)); // this is false, false won't print on console
echo ("\n");

$octNum = 042;
var_dump($octNum);
echo ($octNum);
echo ("\n");

$hexNum = 0xff;
var_dump($hexNum);
echo ($hexNum);
echo ("\n");

$binNum = 0b10011;
var_dump($binNum);
echo ($binNum);
echo ("\n");

$negNum = -42;
var_dump($negNum);
echo ($negNum);
echo ("\n");

$floatNum = 19.20;
var_dump($floatNum);
echo ($floatNum);
echo ("\n");

$sciNum = 1920e-2;
var_dump($sciNum);
echo ($sciNum);
echo ("\n");

$bTrue = true;
var_dump($bTrue);
echo ($bTrue);
echo ("\n");

$bFalse = false;
var_dump($bFalse);
echo ($bFalse);
echo ("\n");

$bCheck = "";
var_dump((bool)$bCheck);
echo ((bool)$bCheck);
echo ("\n");

$aString = "php";
var_dump($aString);
echo ($aString);
echo ("\n");

define("PI", "3.14");
var_dump(PI);
echo (PI);
echo ("\n");
echo (defined("PI")); // to check if constant is defined
echo ("\n");
