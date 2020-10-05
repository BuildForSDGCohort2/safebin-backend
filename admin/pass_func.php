<?php
	require_once("../required/function.php");
	
	if (isset($_POST['submit_form'])){
		$password = data_input($_POST['password']);
		$hashed_password = md5($password);
		
		
		
				$query2 = "UPDATE admin SET password = '$hashed_password' WHERE username='$username'";
				
				if (mysqli_query($connect, $query2)) {
		
				        echo("<script> alert('Password Succesfully Changed!');</script>");
				    }else{
				       
						echo("<script> alert('Error');</script>");
				    }
	}

	if (isset($_POST['pass'])){
		$email = data_input($_POST['email']);
		$password = data_input($_POST['password']);
		$hashed_password = md5($password);
		
		
		
				$query2 = "UPDATE users SET password = '$hashed_password' WHERE email='$email' OR username='$email'";
				
				if (mysqli_query($connect, $query2)) {
		
				        echo("<script> alert('Password Succesfully Changed!');</script>");
				    }else{
				       
						echo("<script> alert('Error');</script>");
				    }
	}
?>