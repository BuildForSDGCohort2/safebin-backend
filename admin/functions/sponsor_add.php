	<?php
	require_once("../required/function.php");
	
	if (isset($_POST['submit_form'])){
		$name = data_input($_POST['name']);
		$email = data_input($_POST['email']);
		
		$queryy ="SELECT * FROM sponsor WHERE email='$email'";
					$result = $connect->query($queryy);

				if ($result->num_rows > 0) {
				echo("<script> alert('A Sponsor with the email ".$email." already exists, kindly register with another Email');</script>");
				}else{
		
				$query2 = "INSERT INTO sponsor (name, email)
				VALUE('$name','$email')";
				
				if (mysqli_query($connect, $query2)) {
					$time = time();
					$actual_time =date('d M, Y', $time);
						
					$query3 = "INSERT INTO badge (email, badge, title, date)
					VALUE('$email','4','SafeBin Sponsor','$actual_time')";
					if (mysqli_query($connect, $query3)) {
		
				        echo("<script> alert('Sponsor Added Succesfully!');</script>");

				    }else{
				       
						echo("<script> alert('Error');</script>");
				    }

				}
	}
	}
?>