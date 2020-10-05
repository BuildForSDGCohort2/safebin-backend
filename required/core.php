<?php
include 'connect.php';
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];

function loggedin(){
	if (isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
		return true;
	}else{
		return false;
	}
}

function getusersfield($connect, $field){
	$query = "SELECT $field FROM users WHERE id='".$_SESSION['user_id']."'";
	if ($query_run = mysqli_query($connect, $query)){
		if($query_result = mysqli_fetch_assoc($query_run)){
			return $query_result[$field];
		}
	}
}

function getadminfield($connect, $field){
	$query = "SELECT $field FROM admin WHERE id='".$_SESSION['user_id']."'";
	if ($query_run = mysqli_query($connect, $query)){
		if($query_result = mysqli_fetch_assoc($query_run)){
			return $query_result[$field];
		}
	}
}
?>