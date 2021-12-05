<?php
/*$servername = "localhost";
$username = "adidasuser";
$password = "123456";
$dbname = "digi_db";
$dsn = "mysql:host=$servername;dbname=$dbname";

$connect=new PDO($dsn, $username, $password);
$connect->exec("SET CHARACTER SET UTF8");
$connect->exec("set names utf8");*/

$db = mysqli_connect('localhost','adidasuser','123456','digi_db');

if (!$db) {
    echo mysqli_connect_error();

}
mysqli_query($db, "set names 'UTF-8'");
require_once 'functions.php';
//require_once 'actions.php';
?>