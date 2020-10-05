<?php
	require_once("../required/function.php");
	
	if (isset($_POST['facebook'])){
		$link = data_input($_POST['link']);
				$query2 = "UPDATE links SET link = '$link' WHERE name='facebook'";
				
				if (mysqli_query($connect, $query2)) {
		
				        echo("<script> alert('Link Succesfully Updated!');</script>");
				    }else{
				       
						echo("<script> alert('Error');</script>");
				    }
	}

	if (isset($_POST['mixlr'])){
		$link = data_input($_POST['link']);
				$query2 = "UPDATE links SET link = '$link' WHERE name='mixlr'";
				
				if (mysqli_query($connect, $query2)) {
		
				        echo("<script> alert('Link Succesfully Updated!');</script>");
				    }else{
				       
						echo("<script> alert('Error');</script>");
				    }
	}

	if (isset($_POST['youtube'])){
		$link = data_input($_POST['link']);
				$query2 = "UPDATE links SET link = '$link' WHERE name='youtube'";
				
				if (mysqli_query($connect, $query2)) {
		
				        echo("<script> alert('Link Succesfully Updated!');</script>");
				    }else{
				       
						echo("<script> alert('Error');</script>");
				    }
	}

	if (isset($_POST['info'])){
		$link = data_input($_POST['link']);
				$query2 = "UPDATE links SET link = '$link' WHERE name='info'";
				
				if (mysqli_query($connect, $query2)) {
		
				        echo("<script> alert('Update Succesful!');</script>");
				    }else{
				       
						echo("<script> alert('Error');</script>");
				    }
	}
?>