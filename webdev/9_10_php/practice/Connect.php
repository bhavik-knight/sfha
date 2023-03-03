<?php

# some variables to connect to  the db
$dbServer = "localhost";
$dbUserName = "phpmyadmin";
$dbName = "Library";
$dbPassword = "Admin@123";

# use mysqli class to instantiate an object
$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);
print_r($connection);

# if db is not conencted properly errno will be a number that is not 0
if ($connection->connect_errno) {
    exit($connection->connect_error.PHP_EOL);
}

# insert query
// $connection->query("INSERT INTO Authors (first_name, last_name) VALUES ('Jane', 'Austin');");
// $connection->query("INSERT INTO Authors (first_name, last_name) VALUES ('Arthur', 'Doyle');");

# update query
$connection->query("
UPDATE Authors
SET pen_name = 'Sir Arthur Conan Doyle'
WHERE first_name = 'Arthur' AND
last_name = 'Doyle';
");

# delete query
$connection->query("
DELETE FROM Authors
WHERE id = 5;
");

# select query
$result = $connection->query("SELECT * from Authors;");
if ($result->num_rows > 0) {
    while($current = $result->fetch_assoc()) {
        print("Author: ".$current["last_name"].', '. $current["first_name"].PHP_EOL);
    }
}
# free the result object
$result->free();

# close the database
$connection->close();
