<?php 
/*
	$rawPhoneNumber = "https://www.youtube.com/watch?v=hPHNbFPuJXs"; 
	$two = "time1,time2";
	 
	 //$two_val = explode("=", $two);

$loop = explode("=", $rawPhoneNumber);
rsort($loop);
	foreach($loop as $key => $val){
		echo "$key = $val\n"."</br>";
	}
	
//echo "Raw Phone Number = $rawPhoneNumber <br />";
//echo "First link = $phoneChunks[0]<br />";
//echo "Second link = $phoneChunks[1]<br />"; 


//$time = strftime("%b, %m %Y at %I:%M %p");

//echo $time; 


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
//arsort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

$string = "dskddk=kdkkd=dkskkd=dldkks";
$ex = explode("=",$string);
krsort($ex);
	foreach($ex as $key => $val){
		echo "Key = ".$key." , Value = ". $val."<br>";
		}



		$time = strftime("%a-%m-%Y at %I:%M %p");
		echo $time;
		
		
		
		else{ // If no field is left empty then execute this action below 
			
			// query to get the counsellor id number 
			$cat_query = main_query("SELECT id FROM career_category WHERE category_name='".$category."'");
			
			if($cat_query){
				$cat_id = $cat_query->fetch_assoc();
				
				$id = $cat_id['id'];
				
			}
			
			$sql = main_query("SELECT * FROM inbox WHERE student_email='".$email."'");
			$sql_fetch = $sql->fetch_assoc();
			// Iniitalizing all the available fields in table name INBOX
			$ids = $sql_fetch['cat_id'];
			$subj = $sql_fetch['subject'];
			$cat_name = $sql_fetch['category'];
			$student_name = $sql_fetch['student_name'];
			$student_email = $sql_fetch['student_email'];
			$messages = $sql_fetch['messages'];
			$times = $sql_fetch['time'];
			
			if(is_null($messages)){
				// Insert data into the database 
				
				$nice_sql = main_query("
						INSERT INTO inbox
						(
							cat_id,
							subject,
							category,
							student_name,
							student_email,
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
				
			}else{
				
				// Perform sql query to check if the same category id by a particular session exists 
				
				$sql_check = main_query("SELECT cat_id FROM inbox WHERE student_email='".$email."' AND cat_id='".$ids."'");
				
					while($sql_id = $sql_check->fetch_assoc()){
						$sql_catid = $sql_id['cat_id'];
						
						if($id == $sql_catid){
				
									
							// Update the values 
							//$new_id = $ids."~!~".$id;
							$new_subj = $subj."~!~".$subject;
							//$new_cat = $cat_name."~!~".$category;
							$new_name = $first_name.' '.$last_name;
							$new_email = $email;
							$new_msg = $messages."~!~".$msg;
							$new_time = $times."~!~".$time;
							
							$sql_up = main_query("UPDATE inbox SET
													cat_id = '".$id."',
													subject = '".$new_subj."',
													category = '".$category."',
													student_name = '".$new_name."',
													student_email = '".$email."',
													messages = '".$new_msg."',
													time = '".$new_time."',
													time2 = '".$time."'
													WHERE student_email = '".$email."'
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
							
									// Insert data into a new row 
							
							$nice_sqls = main_query("
								INSERT INTO inbox
								(
									cat_id,
									subject,
									category,
									student_name,
									student_email,
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
									'".$msg."',
									'".$time."',
									'".$time."'
								)
								");
							
							if($nice_sqls){
								$nice = '<div class="alert alert-success" style="background: #29aafe; color: #fff; font-size: 18px;">
										  <strong>&#10004; Success &nbsp; </strong> Message Sent Successfully.
										</div>';
								}
					
						}
					
					}
				
				
		
	
			}
			
			
		}
	*/


		$time = strftime("%B-%d-%Y");
		
		function main_query($sql){
		
		$conn = new mysqli("localhost","root","","career");
		
		// Check connection 
			if($conn->connect_error){
				die("Database connection failed! " . $conn->connect_error);
			}
		$result = $conn->query($sql);
		if($result)
                {
                    return $result;
                }else{
                    return $conn->error;
                }
		
		
		}
		
		$con = mysql_connect("localhost","root","");
			if(!$con){
				die("Database connection failed");
			}
		$db = mysql_select_db("career");
		
		$per_page = 3;
		
		$pages_query = mysql_query("SELECT COUNT(*) article");
		$pages = ceil(mysql_result($pages_query, 0) / $per_page);
		$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
		$start = ($page - 1) * $per_page;
		$query = mysql_query("SELECT * FROM article LIMIT $start, $per_page");
		
		while($row = mysql_fetch_assoc($query)){
			echo $row['name']."<br />";
		}
		
		if($pages >= 1){ 
		
			for($x=1; $x<=$pages; $x++){
				echo "<a href='?page=".$x."'>".$x."</a>";
			}
			
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

?>