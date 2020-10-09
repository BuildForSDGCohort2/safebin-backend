<?php

	$DB_HOST = '192.185.57.117';
	$DB_USER = 'capitosi_safebin';
	$DB_PASS = 'safebin';
	$DB_NAME = 'capitosi_safebin';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	
?>
