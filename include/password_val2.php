<?php 
//session_start();

$error = "";
$success = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	if(isset($_POST['changes'])){
		// initialize variable to be use 
		$old_pass = test_input($_POST['old_pass']);
		$new_pass = test_input($_POST['new_pass']);
		$con_pass = test_input($_POST['con_pass']);
		
		if($con_pass != $new_pass){
			$error = '<div class="alert alert-danger" style="font-size: 18px;">
					  <strong>Ooops !</strong> Confirm Password Field Does Not Match New Password Field.
					</div>';
		}else{
			//Check if the old password exist 
			$sql_pass = main_query("SELECT * FROM add_counsellor WHERE email='".$login_session."' AND password='".$old_pass."'");
			$count = mysqli_num_rows($sql_pass);
				if($count != 0){
					// Update Values
					$update_pass = main_query("UPDATE add_counsellor SET
												password = '".$new_pass."'
												WHERE email='".$login_session."'
											");
					if($update_pass){
						$success = '<div class="alert alert-success" style="background: #29aafe; color: #fff; font-size: 18px;">
						  <strong>&#10004; Success &nbsp; </strong> Password Change Successfully.
						</div>';
					}
				}else{
					//Flag an error 
					$error = '<div class="alert alert-danger" style="font-size: 18px;">
					  <strong>Ooops !</strong> This Password Does Not Exist.
					</div>';
				}
		}
		
	}


?>