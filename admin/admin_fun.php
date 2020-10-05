	<?php
	require_once("../required/function.php");
	
	if (isset($_POST['submit_form'])){
		$name = data_input($_POST['name']);
		$username = data_input($_POST['username']);
		$password = data_input($_POST['password']);
		$hashed_password = md5($password);
		
		$queryy ="SELECT * FROM admin WHERE username='$username'";
					$result = $connect->query($queryy);

				if ($result->num_rows > 0) {
				echo("<script> alert('An Admin with the username ".$username." already exists, kindly register with another Username');</script>");
				}else{
		
				$query2 = "INSERT INTO admin (name, username, password)
				VALUE('$name','$username','$hashed_password')";
				
				if (mysqli_query($connect, $query2)) {
		
				        echo("<script> alert('Admin Added Succesfully!');</script>");

				    }else{
				       
						echo("<script> alert('Error');</script>");
				    }


	}
	}
?>