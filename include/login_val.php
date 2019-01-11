<?php 

	session_start();
	
	$error = "";
	
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if(empty($username) || empty($password)){
			$error = "Invalid Username Or Password";
		}else{
			
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		//$username = mysqli_real_escape_string($conn, $username);
		//$password = mysqli_real_escape_string($conn, $password);
		
		$sql = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'";
		$query = main_query($sql);
		$rows = mysqli_num_rows($query);
		
			if($rows === 1){
				$_SESSION['login_user'] = $username;
				header("Location: dashboard.php");
					
			}else{
				$error =  "Invalid Username or Password";
				return $error;
			}
		
		mysqli_close($conn);
			
		}
		
	}


?>