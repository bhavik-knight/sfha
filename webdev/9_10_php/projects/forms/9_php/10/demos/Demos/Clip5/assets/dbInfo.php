<?php

$dbPassword = "Admin@123";
$dbUserName = "phpmyadmin";
$dbServer = "localhost";
$dbName = "Library";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if ($connection->connect_errno) {
    exit("Database Connection Failed. Reason: " . $connection->connect_error);
}
?>
