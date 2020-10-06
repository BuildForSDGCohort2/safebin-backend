<?php

	$DB_HOST = 'ec2-34-192-122-0.compute-1.amazonaws.com';
	$DB_USER = 'jekhvihjinpysr';
	$DB_PASS = 'f7e0e76751ed35321d32b35763f3d4e0944e7e3a9c64692d49c50842170d164b';
	$DB_NAME = 'd23m890snar1vf';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	
?>
