<?php
 require '../../required/connect.php';

	$likeid = $_POST['like_id'];

$sql2 = "SELECT * FROM sponsor WHERE id='$likeid'";
	$result2 = $connect->query($sql2);
	$user_data=mysqli_fetch_assoc($result2);
	if ($result2->num_rows > 0) {
		$email = $user_data['email'];

	$sql = "DELETE FROM badge WHERE email='$email'";
	if ($connect->query($sql) === TRUE) {
		$sql3 = "DELETE FROM sponsor WHERE id='$likeid'";
		if ($connect->query($sql3) === TRUE) {
		echo '<i class="fa fa-check"></i> Sponsor Deleted!';
	} else {
		echo 'Error!!! <i class="fa fa-times"></i>';
	}}}
?>