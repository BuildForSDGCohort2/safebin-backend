<?php
require_once "required/function.php";
require_once "required/dbconfig.php";

// Register Function
if (isset($_POST['register'])){
	$name = data_input($_POST['name']);
	$email = data_input($_POST['email']);
	$gender = data_input($_POST['gender']);
	$country = data_input($_POST['country']);
	$username = data_input($_POST['username']);
	$password = data_input($_POST['password']);
	$hashed_password = md5($password);
	
	$queryy ="SELECT * FROM users WHERE email='$email'";
		  $result = $connect->query($queryy);

				if ($result->num_rows > 0) {
					?>
				
				<div class="alert alert-danger">
				  <strong>Error!</strong> The Email <b>'<?php echo $email; ?>'</b> already exists, kindly register with another Email to Continue!
				</div>
				
				<?php
				}else{

		$query2 = "INSERT INTO users (name, email, gender, country, username, password)
		VALUE('$name','$email','$gender','$country','$username','$hashed_password')";
		
		if (mysqli_query($connect, $query2)) {
					?>
					<div class="alert alert-success">
						<strong>Registration Complete!</strong> <a href="login" title="Login"><b>Login</b></a> now to Continue! 
					</div>

		  <?php }else{
			  
			echo("<script> alert('Error');</script>");
			}
  }}

//   Login Func
if (isset($_POST['login'])){
	$email = data_input($_POST['email']);
	$password = data_input($_POST['password']);
	$hashed_password = md5($password);

	$query1 ="SELECT * FROM users WHERE email='$email' AND password='$hashed_password'";
	$result = $connect->query($query1);
	$user_data=mysqli_fetch_assoc($result);
		if ($result->num_rows == 0) {
			?>
			
			<div class="alert alert-danger">
				<strong>Error!</strong> Invalid Login Details. Please Check Your Entries and Try Again!
			</div>
			
			<?php
		}else if ($result->num_rows == 1) {
			$user_id = $user_data['id'];
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			$_SESSION['id'] = $id;
			$_SESSION['loggedIn'] = true;
			$_SESSION['user_id']=$user_id;
			header('Location: home');
		
		}
	}

// Update Profile
 if (isset($_POST['profile_upd'])){
		$info = data_input($_POST['info']);
		$phone = data_input($_POST['phone']);
		$facebook = data_input($_POST['facebook']);
		$twitter = data_input($_POST['twitter']);

		$sql = "UPDATE users SET info='$info', phone='$phone', facebook='$facebook', twitter='$twitter' WHERE email='$email'";

		if ($connect->query($sql) === TRUE) { ?>
			<center><div class="alert alert-success">
				<strong>Success!</strong> Your Profile was saved successfully!
			</div></center>
		<?php } else { ?>
			<center><div class="alert alert-danger">
				<strong>Error!</strong> There was an error saving your profile <?php $connect->error?>!
			</div></center>
		<?php }
		}


// For SmartBin Request
if (isset($_POST['smartbin'])){
	$location = data_input($_POST['location']);
	$size = data_input($_POST['size']);
	$number = data_input($_POST['number']);
	$info = data_input($_POST['info']);
	$date = data_input($_POST['date']);
	
	$queryy ="SELECT * FROM smartbin WHERE email='$email'";
		  $result = $connect->query($queryy);

				if ($result->num_rows > 0) {
					?>
				
				<div class="alert alert-warning">
				  <strong>Sorry!</strong> You already made a request, please await response!
				</div>
				
				<?php
				}else{

		$query2 = "INSERT INTO smartbin (email, name, location, size, number, date, info)
		VALUE('$email','$name','$location','$size','$number','$date','$info')";
		
		if (mysqli_query($connect, $query2)) {
					?>
					<div class="alert alert-success">
						<strong>Success!</strong> Your Request Was Successfully Submitted! 
					</div>

		  <?php }else{
			  
			echo("<script> alert('Error');</script>");
			}
  }}


//   Situation Reports Submission
  if (isset($_POST['report'])){
	$location = data_input($_POST['location']);
	$info = data_input($_POST['info']);
	$date = data_input($_POST['date']);
	$video = data_input($_POST['video']);
	$spe = data_input($_POST['spe']);
	$fileNames = array_filter($_FILES['files']['name']);

	$queryy ="SELECT * FROM report WHERE spe='$spe'";
		  $result = $connect->query($queryy);

				if ($result->num_rows > 0) {
					?>
				
				<div class="alert alert-warning">
				  <strong>Sorry!</strong> You already submitted something similar, please, try again!
				</div>
				
				<?php
				}else{
	$query2 = "INSERT INTO report (email, spe, info, video, location, date)
	VALUE('$email','$spe','$info','$location','$video','$date')";
		
		if (mysqli_query($connect, $query2)) {

			$query3 = "INSERT INTO badge (spe, email, badge, title, date)
			VALUE('$spe','$email','1','Situation Report','$date')";
			if (mysqli_query($connect, $query3)) {
				// File upload configuration 
				$targetDir = "uploads/"; 
				$allowTypes = array('jpg','png','jpeg','gif'); 
				 
				$statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
				
				if(!empty($fileNames)){ 
					foreach($_FILES['files']['name'] as $key=>$val){ 
						// File upload path 
						$fileName = basename($_FILES['files']['name'][$key]); 
						$targetFilePath = $targetDir . $fileName; 
						 
						// Check whether file type is valid 
						$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
						if(in_array($fileType, $allowTypes)){ 
							// Upload file to server 
							if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
								// Image db insert sql 
								$insertValuesSQL .= "('".$spe."','".$fileName."', NOW()),"; 
							}else{ 
								$errorUpload .= $_FILES['files']['name'][$key].' | '; 
							} 
						}else{ 
							$errorUploadType .= $_FILES['files']['name'][$key].' | '; 
						} 
					} 
					 
					if(!empty($insertValuesSQL)){ 
						$insertValuesSQL = trim($insertValuesSQL, ','); 
						// Insert image file name into database 
						$insert = $DB_con->query("INSERT INTO images (spe, file_name, uploaded_on) VALUES $insertValuesSQL"); 
						if($insert){
					?>
					<div class="alert alert-success">
						<strong>Success!</strong> Your Report Was Successfully Submitted! And, you just earned a new badge, check it <a href="badges"><strong>HERE</strong></a>
					</div>

					<?php }else{ ?>
			  
			  <div class="alert alert-danger">
				  <strong>Error!</strong> There was a problem saving your form, please try again! 
			  </div>
			  <?php }}}}
  }}}

//   Success Story Submission
if (isset($_POST['story'])){
	$location = data_input($_POST['location']);
	$info = data_input($_POST['info']);
	$date = data_input($_POST['date']);
	$video = data_input($_POST['video']);
	$spe = data_input($_POST['spe']);
	$fileNames = array_filter($_FILES['files']['name']);

	$queryy ="SELECT * FROM story WHERE spe='$spe'";
		  $result = $connect->query($queryy);

				if ($result->num_rows > 0) {
					?>
				
				<div class="alert alert-warning">
				  <strong>Sorry!</strong> You already submitted something similar, please, try again!
				</div>
				
				<?php
				}else{
	$query2 = "INSERT INTO story (email, spe, info, video, location, date)
	VALUE('$email','$spe','$info','$location','$video','$date')";
		
		if (mysqli_query($connect, $query2)) {

			$query3 = "INSERT INTO badge (spe, email, badge, title, date)
			VALUE('$spe','$email','2','Success Story','$date')";
			if (mysqli_query($connect, $query3)) {
				// File upload configuration 
				$targetDir = "uploads/"; 
				$allowTypes = array('jpg','png','jpeg','gif'); 
				 
				$statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
				
				if(!empty($fileNames)){ 
					foreach($_FILES['files']['name'] as $key=>$val){ 
						// File upload path 
						$fileName = basename($_FILES['files']['name'][$key]); 
						$targetFilePath = $targetDir . $fileName; 
						 
						// Check whether file type is valid 
						$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
						if(in_array($fileType, $allowTypes)){ 
							// Upload file to server 
							if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
								// Image db insert sql 
								$insertValuesSQL .= "('".$spe."','".$fileName."', NOW()),"; 
							}else{ 
								$errorUpload .= $_FILES['files']['name'][$key].' | '; 
							} 
						}else{ 
							$errorUploadType .= $_FILES['files']['name'][$key].' | '; 
						} 
					} 
					 
					if(!empty($insertValuesSQL)){ 
						$insertValuesSQL = trim($insertValuesSQL, ','); 
						// Insert image file name into database 
						$insert = $DB_con->query("INSERT INTO images (spe, file_name, uploaded_on) VALUES $insertValuesSQL"); 
						if($insert){
					?>
					<div class="alert alert-success">
						<strong>Success!</strong> Your Story Was Successfully Submitted! And, you just earned a new badge, check it <a href="badges"><strong>HERE</strong></a>
					</div>

					<?php }else{ ?>
			  
			  <div class="alert alert-danger">
				  <strong>Error!</strong> There was a problem submitting your story, please try again! 
			  </div>
			  <?php }}}}
  }}}

//   Agent/Ambassador
if (isset($_POST['ambassador'])){
	$name = data_input($_POST['name']);
	$email = data_input($_POST['email']);
	$phone = data_input($_POST['phone']);
	$gender = data_input($_POST['gender']);
	$community = data_input($_POST['community']);
	$cover = data_input($_POST['cover']);

	$queryy ="SELECT * FROM agent WHERE email='$email'";
		  $result = $connect->query($queryy);

				if ($result->num_rows > 0) {
					?>
				
				<div class="alert alert-danger">
				  <strong>Sorry!</strong> You already submitted an application, please await response!
				</div>
				
				<?php
				}else{

		$query2 = "INSERT INTO agent (name, email, phone, gender, community, cover)
		VALUE('$name','$email','$phone','$gender','$community','$cover')";
		
		if (mysqli_query($connect, $query2)) {
					?>
					<div class="alert alert-success">
						<strong>Success!!!</strong> Your Application Was Successfully Submitted, we will contact you, soon!
					</div>

		  <?php }else{
			  
			echo("<script> alert('Error');</script>");
			}
  }}

  //   Get Prize
if (isset($_POST['claimprize'])){
	$date = data_input($_POST['date']);
	$badges = data_input($_POST['badges']);

	$queryy ="SELECT * FROM prize WHERE email='$email'";
		  $result = $connect->query($queryy);

				if ($result->num_rows > 0) {
					?>
				
				<div class="alert alert-warning">
				  <strong>We got you covered!</strong> You already submitted an application, please await response!
				</div>
				
				<?php
				}else{

		$query2 = "INSERT INTO prize (name, email, date, badges)
		VALUE('$name','$email','$date','$badges')";
		
		if (mysqli_query($connect, $query2)) {
					?>
					<div class="alert alert-success">
						<strong>Success!!!</strong> Your Application Was Successfully Submitted, we will contact you soon and get your package to you!
					</div>

		  <?php }else{
			  
			echo("<script> alert('Error');</script>");
			}
  }}

//   Contact Us
  if (isset($_POST['contact_us'])){
	$subject = data_input($_POST['subject']);
	$message = data_input($_POST['message']);
	$date = data_input($_POST['date']);

		$query2 = "INSERT INTO contact (name, email, phone, subject, message, date)
		VALUE('$name','$email','$phone','$subject','$message','$date')";
		
		if (mysqli_query($connect, $query2)) {
					?>
					<div class="alert alert-success">
						<strong>Success!</strong> Your Message Was Sent Successfully. Our respondent will reply you, soon! 
					</div>

		  <?php }else{ ?>
			  
			<div class="alert alert-danger">
				<strong>Error!</strong> There was a problem submitting your form, please try again! 
			</div>
			<?php }
  }
?>