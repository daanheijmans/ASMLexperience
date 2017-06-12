<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "asml";

try{
	$conn = new PDO("mysql:host=$dbhost;dbname=$db;", $dbuser, $dbpass);
} catch(PDOException $e){
	die("Connection Failed: " . $e->getMessage());
}

?>