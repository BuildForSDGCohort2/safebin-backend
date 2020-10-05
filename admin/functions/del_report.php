<?php
 require '../../required/connect.php';

	$likeid = $_POST['like_id'];

$sql2 = "SELECT * FROM report WHERE id='$likeid'";
	$result2 = $connect->query($sql2);
	$user_data=mysqli_fetch_assoc($result2);
	if ($result2->num_rows > 0) {
		$spe = $user_data['spe'];

	$sql = "DELETE FROM badge WHERE spe='$spe'";
	if ($connect->query($sql) === TRUE) {
		$sql3 = "DELETE FROM report WHERE id='$likeid'";
		if ($connect->query($sql3) === TRUE) {
		echo '<i class="fa fa-check"></i> Report Deleted!';
	} else {
		echo 'Error!!! <i class="fa fa-times"></i>';
	}}}
?>