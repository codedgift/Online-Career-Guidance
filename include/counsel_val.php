<?php 

	session_start();
	
	$error = "";
	
	if(isset($_POST['con_login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		if(empty($email) || empty($password)){
			$error = "You are not a Counselor";
			$error = '<div class="alert alert-danger" style="font-size: 18px;">
					  <strong>! Ooops &nbsp; </strong> You are not a Counselor
					</div>';
		}else{
			
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		// To protect MySQL injection for Security purpose
		$email = stripslashes($email);
		$password = stripslashes($password);
		//$username = mysqli_real_escape_string($conn, $username);
		//$password = mysqli_real_escape_string($conn, $password);
		
		$sql = "SELECT * FROM add_counsellor WHERE email = '".$email."' AND password = '".$password."'";
		$query = main_query($sql);
		$rows = mysqli_num_rows($query);
		
			if($rows === 1){
				$_SESSION['login_counsellor'] = $email;
				header("Location: counsellor_dashboard.php");
					
			}else{
				$error =  '<div class="alert alert-danger" style="font-size: 18px;">
							  <strong>! Ooops &nbsp; </strong> You are not a Counselor
							</div>';
				return $error;
			}
		
		mysqli_close($conn);
			
		}
		
	}


?>