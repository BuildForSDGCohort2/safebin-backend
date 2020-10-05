<?php
 require '../../required/connect.php';
 
	$likeid = $_POST['like_id'];

	$sql = "UPDATE prize SET status='2' WHERE id='$likeid'";

if ($connect->query($sql) === TRUE) {
	echo 'Prize Rejected <i class="fa fa-check"></i>';
} else {
    echo 'Error <i class="fa fa-times"></i>';
 }

?>