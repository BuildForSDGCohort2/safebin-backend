<?php
 require '../../required/connect.php';

	$likeid = $_POST['like_id'];

$sql = "UPDATE contact SET status='1' WHERE id='$likeid'";

if ($connect->query($sql) === TRUE) {
	echo 'Message Attended To! <i class="fa fa-check"></i>';
} else {
    echo 'Error <i class="fa fa-times"></i>';
 }

?>