<?php
 require '../../required/connect.php';
 
	$likeid = $_POST['like_id'];

	$sql = "UPDATE agent SET status='2' WHERE id='$likeid'";

if ($connect->query($sql) === TRUE) {
	echo 'Agent Rejected <i class="fa fa-check"></i>';
} else {
    echo 'Error <i class="fa fa-times"></i>';
 }

?>