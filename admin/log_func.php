<?php
require_once "../required/function.php";

 if (isset($_POST['submit'])){
		$username = data_input($_POST['username']);
		$password = data_input($_POST['password']);
		$hashed_password = md5($password);
	
		$query1 ="SELECT * FROM admin WHERE username='$username' AND password='$hashed_password'";
		$result = $connect->query($query1);
		$user_data=mysqli_fetch_assoc($result);
			if ($result->num_rows == 0) {
				echo("<script> alert('Invalid Login Details! Please Enter Correct Details!');</script>");	
			}else if ($result->num_rows == 1) {
				$user_id = $user_data['id'];
				$_SESSION['name'] = $name;
				$_SESSION['username'] = $username;
				$_SESSION['id'] = $id;
				$_SESSION['loggedIn'] = true;
				$_SESSION['user_id']=$user_id;
				header('Location: home');
			
			}
		}
?>