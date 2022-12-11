<?php
// database connection file
$databaseHost = 'localhost';//or localhost
$databaseName = 'forms'; // your db_name
$databaseUsername = 'root'; // root by default for localhost 
$databasePassword = 'Qwert@1234';  // by defualt empty for localhost

$cser = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>