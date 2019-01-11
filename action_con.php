<?php 
	include("config/function.php");

	

		session_start();
		
		$counsel_check = $_SESSION['login_counsellor'];
		$sql = "SELECT * FROM add_counsellor WHERE email='".$counsel_check."'";
		$query = main_query($sql);
			
			$row = mysqli_fetch_assoc($query);
			$login_session = $row['email'];
			$full_name = $row['name'];
			$counsellor_id = $row['cat_id'];
			
			
				if(!isset($login_session)){
					//Close Connection
					mysqli_close();
					
					// Redirect To Home Page 
					header("Location: index.php");
				}

		//echo $msgs;\

			//$get_id = $_GET['id'];
			//$get_cat = $_GET['category'];
			//$get_conversation = get_conversation($get_id,$email);

			//echo $get_id;
			$new_id = $_REQUEST['id'];
			$get_conversation2 = get_conversation2($new_id);
			
		if(isset($_POST['done'])){

			$reply_msg = $_POST['textcontent'];

			$fetch = $get_conversation2->fetch_assoc();
			$cat_id = $fetch['cat_id'];
			$old_msg = $fetch['messages'];
			$old_time = $fetch['time'];
			$old_ident = $fetch['identity'];
			$time = strftime("%a-%m-%Y at %I:%M %p");

			// Variables for new msg and time 
			$new_msg = $old_msg."~!~".$reply_msg;
			$new_time = $old_time."~!~".$time;
			$new_identity = $old_ident."~!~"."Counsellor";

			main_query("UPDATE inbox SET 
						messages = '".$new_msg."',
						identity = '".$new_identity."',
						time = '".$new_time."',
						time2 = '".$time."'
						WHERE id='".$new_id."'
					");

			
		}


		if(isset($_POST['display'])){
			$sql_show = main_query("SELECT * FROM inbox WHERE id='$new_id' ORDER By id DESC");
			
			//$reply_msg = $_POST['textcontent'];
			
			while($row_msg = $sql_show->fetch_assoc()){
				$catty = $row_msg['category'];
				$msg = $row_msg['messages'];
				$time = $row_msg['time'];
				$ident = $row_msg['identity'];
				
				$array = explode("~!~", $msg);
				krsort($array);
				$array2 = explode("~!~", $time);
				$array3 = explode("~!~", $ident);
				//krsort($array2)
					//var_dump($array2);
				
				foreach($array as $val=> $key){
					$msg_val = $key;
					$time_val = $array2[$val];
					$ident_val = $array3[$val];
					
					echo "<tr' '>
				
						<th scope='row'>From : $ident_val <br >
							Message: $msg_val<br>
							<span style='float: right'>$time_val</span>
						</th>
						
					</tr>";
					
				}
				
				/*
				echo "<tr>
				
						<th scope='row'>From : Me <br >
							Message: <br>
							<span style='float: right'>Time</span>
						</th>
						
					</tr>"; */
				
			}

		}
		

