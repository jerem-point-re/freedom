<?php 
global $PDO;

$host = 'localhost';
$dbName = 'freedom';
$username = 'root';
$password = '';

if (!isset($PDO)) $PDO = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $username, $password);

?>