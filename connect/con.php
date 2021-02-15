<?php

$host = "localhost";
$dbname = "companies";
$user = "comp";
$password = "!Q@#Exas12";

try {
	$db = new PDO("mysql:host={$host};dbname={$dbname}", $user, $password);
} catch (Exception $e) {
	die("Connection Error ". $e->getMessage());
	
}