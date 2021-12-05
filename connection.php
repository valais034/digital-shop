<?php
$servername = "localhost";
$username = "adidasuser";
$password = "123456";
$dbname = "digi_db";
$dsn = "mysql:host=$servername;dbname=$dbname";
try {
$connect=new PDO($dsn, $username, $password);
$connect->exec("SET CHARACTER SET UTF8");
$connect->exec("set names utf8");
}
catch (PDOException $error) {
    echo $error ->__toString();
}
//$db = new mysqli('localhost', 'adidasuser', '123456', 'digi_db');
//$db->exec("SET CHARACTER SET UTF8");
//$db->exec("set names utf8");
//if($db->connect_errno > 0){
//    die('Unable to connect to database [' . $db->connect_error . ']');
//}
?>