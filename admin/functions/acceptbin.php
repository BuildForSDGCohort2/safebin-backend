<?php
 require '../../required/connect.php';

	$likeid = $_POST['like_id'];

$sql = "UPDATE smartbin SET status='1' WHERE id='$likeid'";

if ($connect->query($sql) === TRUE) {
	echo 'SmartBin Approved! <i class="fa fa-check"></i>';
} else {
    echo 'Error <i class="fa fa-times"></i>';
 }

?>