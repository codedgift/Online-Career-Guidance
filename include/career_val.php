<?php 
//==========================================================//

$conn = new mysqli(SERVER,USERNAME,PASSWORD,DATABASE);
		
		// Check connection 
			if($conn->connect_error){
				die("Database connection failed! " . $conn->connect_error);
}

//==========================================================//

	$nice = "";
	$nice_error = "";
	$subject = "";
	$msg = "";
	
	//echo strftime("%b, %m %Y at %I:%M %p")."~!";
	
	
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	
	//echo strftime("%I:%M %p %d/%m/%Y");
	
	if(isset($_POST['send_msg'])){
		
		$subject = test_input($_POST['subject']);
		$category = test_input($_POST['category']);
		$msg = test_input($_POST['msg']);
		$identity = "Me";
		//$time = strftime("%b, %m %Y");
		$time = strftime("%a-%m-%Y at %I:%M %p");
		$real_msg = "<tr>					
						<th scope='row'>From : Me <br >
							Message: $msg<br>
							<span style='float: right'>$time</span>
						</th>
						
					</tr>";
		$now_msg = mysqli_real_escape_string($conn, $real_msg);

		if((empty($subject)) || ($category === 'Select') || (empty($msg))){
			
			$nice_error =	'<div class="alert alert-danger" style="font-size: 18px;">
							  <strong>Ooops !</strong> All Fields Required. 
							</div>';
			
		}else{ // If no field is left empty then execute this action below 
			
			// Check for the category id 
			$id_cat = main_query("SELECT id FROM career_category WHERE category_name='".$category."'");
			$fetch_id = $id_cat->fetch_assoc();
			$id = $fetch_id['id'];
			
			$sql_check = main_query("SELECT * FROM inbox WHERE student_email='".$email."' AND cat_id='".$id."'");
			$rows = mysqli_num_rows($sql_check);
			
			if($rows != 0){
				// Get the former fields name
				$fetch_check = $sql_check->fetch_assoc();
				$subj = $fetch_check['subject'];
				$msgs = $fetch_check['messages'];
				$times = $fetch_check['time'];
				$ident = $fetch_check['identity'];
				
				// New Values  
				$new_subj = $subj."~!~".$subject;
				$new_msg = $msgs."~!~".$msg;
				$new_time = $times."~!~".$time;
				$new_identity = $ident."~!~"."Me";
				
				$sql_up = main_query("UPDATE inbox SET
									subject = '".$new_subj."',
									identity = '".$new_identity."',
									messages = '".$new_msg."',
									time = '".$new_time."'
									WHERE student_email='".$email."' AND cat_id='".$id."'
									");
				// if Update is done successfull , then show an success message 
				if($sql_up){
					$nice = '<div class="alert alert-success" style="background: #29aafe; color: #fff; font-size: 18px;">
						  <strong>&#10004; Success &nbsp; </strong> Message Sent Successfully.
						</div>';
				}else{
					$nice_error =	'<div class="alert alert-danger" style="font-size: 18px;">
						  <strong>Ooops !</strong> An error occur in database insertion. 
						</div>';
				}
				
				
			}else{
						$nice_sql = main_query("
						INSERT INTO inbox
						(
							cat_id,
							subject,
							category,
							student_name,
							student_email,
							identity,
							messages,
							time,
							time2
						)
						VALUES
						(
							'".$id."',
							'".$subject."',
							'".$category."',
							'$first_name $last_name',
							'".$email."',
							'Me',
							'".$msg."',
							'".$time."',
							'".$time."'
						)
						");
						
				if($nice_sql){
					$nice = '<div class="alert alert-success" style="background: #29aafe; color: #fff; font-size: 18px;">
							  <strong>&#10004; Success &nbsp; </strong> Message Sent Successfully.
							</div>';
					}
			}
			
		}

	}

?>