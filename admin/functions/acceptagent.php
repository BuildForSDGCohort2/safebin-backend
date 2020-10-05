<?php
 require '../../required/connect.php';

	$likeid = $_POST['like_id'];
	

	$sql2 = "SELECT * FROM agent WHERE id='$likeid'";
	$result2 = $connect->query($sql2);
	$user_data=mysqli_fetch_assoc($result2);
	if ($result2->num_rows > 0) {
		$email = $user_data['email'];

$sql = "UPDATE agent SET status='1' WHERE id='$likeid'";

if ($connect->query($sql) === TRUE) {
		$time = time();
		$actual_time =date('d M, Y', $time);
		
	$query3 = "INSERT INTO badge (email, badge, title, date)
	VALUE('$email','3','Community Agent','$actual_time')";
	if (mysqli_query($connect, $query3)) {
		echo 'Agent Accepted <i class="fa fa-check"></i>';
	} else {
		echo 'Error <i class="fa fa-times"></i>';
}}}
?>