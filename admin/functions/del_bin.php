<?php
 require '../../required/connect.php';

	$likeid = $_POST['like_id'];

		$sql3 = "DELETE FROM smartbin WHERE id='$likeid'";
		if ($connect->query($sql3) === TRUE) {
		echo '<i class="fa fa-check"></i> SmartBin Application Deleted!';
	} else {
		echo 'Error!!! <i class="fa fa-times"></i>';
	}
?>