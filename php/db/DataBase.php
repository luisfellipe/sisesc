<?php 
$host = "localhost";
$dbname = "escola";
$username = "username";
$password = "passwoard";

$dsn = "mysql:host=$host;dbname=$dbname"
try{
	$conn = new PDO($dsn, $username, $passwoard);
	$conn- > setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}catch(PDOException $e){
	echo "Connection failed: ". $e->getMessage();
}

?>