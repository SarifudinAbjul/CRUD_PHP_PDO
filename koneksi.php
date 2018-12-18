<?php

$server='localhost';
$user='user_name';
$ps='password';
$db='kantor';

try {
	$dbConn= new PDO("mysql:host={$server};dbname={$db}",$user,$ps);

	//set error
	$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// echo 'connect success';

}catch(PDOException $e){
	die("connection error:". $e->getMessage(). "</br>");
}


?>
