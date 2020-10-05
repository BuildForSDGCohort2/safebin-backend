<?php
	require_once("../required/function.php");
	
	if (isset($_POST['submit_form'])){
		$info = data_input($_POST['info']);
            $query2 = "INSERT INTO updates (info)
            VALUE('$info')";
            
            if (mysqli_query($connect, $query2)) {

                    echo("<script> alert('Update Uploaded Succesfully!');</script>");

                }else{
                    
                    echo("<script> alert('Error');</script>");
                }
	}
?>