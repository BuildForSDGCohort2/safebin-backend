<?php

	$DB_HOST = 'remotemysql.com';
	$DB_USER = 'ov37lSw5Yu';
	$DB_PASS = 'LJmoNpjuGg';
	$DB_NAME = 'ov37lSw5Yu';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	
?>
