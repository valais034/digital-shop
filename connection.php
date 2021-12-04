<?php
$servername = "localhost";
$username = "adidasuser";
$password = "123456";
$dbname = "digi_db";
$dsn = "mysql:host=$servername;dbname=$dbname";

$connect = newPDO($dsn, $username, $password);

?>