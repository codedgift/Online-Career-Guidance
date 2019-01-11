<?php 

include("constants.php");

// -------------------------------------------------------------//

	function main_query($sql){
		
		$conn = new mysqli(SERVER,USERNAME,PASSWORD,DATABASE);
		
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
	
// -------------------------------------------------------------//

	function session(){
		
		
		
	}

// -------------------------------------------------------------//	
	
	function page_query($page_name){
		$sql = "SELECT * FROM pages WHERE page_name='".$page_name."'";
		$query = main_query($sql);
			if($query->num_rows > 0){
				$row = $query->fetch_assoc();
				return $row;
			}else{
				// Echo error message
			}
	}
	
// -------------------------------------------------------------//
	
	function career_category(){
		$sql = "SELECT * FROM career_category";
		$query = main_query($sql);
			return $query;
	}
	
// -------------------------------------------------------------//
	
	function inbox(){
	 $email = '';
		$sql = "SELECT * FROM inbox WHERE student_email='".$email."'";
		$query = main_query($sql);
			return $query;
	}
	
	
// -------------------------------------------------------------//

	function register(){
		$error = "";
		
		if(isset($_POST['register'])){
			
			$fname = $_POST['first_name'];
			$lname = $_POST['last_name'];
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$con_password = $_POST['con_password'];
			$gender = $_POST['gender'];
			$state = $_POST['state'];
			$phone = $_POST['phone'];
			$address = $_POST['address'];
			$about_me = $_POST['about_me'];
			
			if(
				!empty($fname) &&
				!empty($lname) &&
				!empty($username) &&
				!empty($email) &&
				!empty($password) &&
				!empty($con_password) &&
				($password === $con_password) &&
				($gender != "Select") &&
				($state != "Select") &&
				!empty($phone) &&
				!empty($address) &&
				!empty($about_me)
			){ // Then
			// Unique Email
			if($email != ""){
				
				$sql_check = "SELECT email FROM user WHERE email='".$email."'";
				$query_check = main_query($sql_check);
				$check = mysqli_num_rows($query_check);
				
					if($check === 1){
						$error = '<div class="alert alert-danger" style="font-size: 18px;">
									  <strong>Ooops !&nbsp; </strong> Email Already Exists.
									</div>';
					}
				
			}
					
			}
			
		}
		
	}
	
	
// -------------------------------------------------------------//
	
	function c(){
		$sql = "SELECT * FROM services LIMIT 3";
		$query = main_query($sql);
			return $query;
	}

// -------------------------------------------------------------//
	
	function team(){
		$sql = "SELECT * FROM team";
		$query = main_query($sql);
			return $query;
	}
	
// -------------------------------------------------------------//
	
	function team_get($id){
		$sql = "SELECT * FROM team WHERE id='".$id."'";
		$query = main_query($sql);
			return $query;
	}
	

// -------------------------------------------------------------//
	
	function article(){
		$sql = "SELECT * FROM article";
		$query = main_query($sql);
			return $query;
	}
	
// -------------------------------------------------------------//
	
	function profile($id){
		$sql = "SELECT * FROM team WHERE id='".$id."'";
		$query = main_query($sql);
			if($query->num_rows > 0){
				$row_other = $query->fetch_assoc();
				return $row_other;
			}else{
				// Echo error message
			}
	}
	
// -------------------------------------------------------------//
	
	function slider(){
		$sql = "SELECT * FROM slider";
		$query = main_query($sql);
		return $query;
	}
	
// -------------------------------------------------------------//
	
	function main_makeup(){
		$sql = "SELECT * FROM makeup LIMIT 5";
		$query = main_query($sql);
		return $query;
	}
	
// -------------------------------------------------------------//
	
	function makeup(){
		$sql = "SELECT * FROM makeup";
		$query = main_query($sql);
		return $query;
	}
	
// -------------------------------------------------------------//
	
	function late_port(){
		$sql = "SELECT * FROM portfolio LIMIT 5";
		$query = main_query($sql);
			return $query;
	}
	
// -------------------------------------------------------------//
	
	function others(){
		$sql = "SELECT * FROM others";
		$query = main_query($sql);
			if($query->num_rows > 0){
				$row_other = $query->fetch_assoc();
				return $row_other;
			}else{
				// Echo error message
			}
	}
	
// -------------------------------------------------------------//
	
	function details(){
		$sql = "SELECT * FROM details";
		$query = main_query($sql);
			if($query->num_rows > 0){
				$row_del = $query->fetch_assoc();
				return $row_del;
			}else{
				// Echo error message
			} 
	}
	
// -------------------------------------------------------------//
	
	function contact(){
		$sql = "SELECT * FROM contact";
		$query = main_query($sql);
			if($query->num_rows > 0){
				$row_con = $query->fetch_assoc();
				return $row_con;
			}else{
				// Echo error message
			} 
	}
	
// -------------------------------------------------------------//
	
	// function to get portfolio category 
	function portfolio_cat(){
		$sql = "SELECT * FROM portfolio_category";
		$query = main_query($sql);
			return $query;
	}
	
// -------------------------------------------------------------//
	
	// function to get portfolio image
	function portfolio(){
		$sql = "SELECT * FROM portfolio";
		$query = main_query($sql);
			return $query;
	}
	
// -------------------------------------------------------------//
	
	function services(){
		$sql = "SELECT * FROM services";
		$query = main_query($sql);
			return $query;
	}
	
// -------------------------------------------------------------//
	
	function education(){
		$sql = "SELECT * FROM education";
		$query = main_query($sql);
			return $query;
	}
	
// -------------------------------------------------------------//
	
	function work(){
		$sql = "SELECT * FROM work";
		$query = main_query($sql);
			return $query;
	}
	
// -------------------------------------------------------------//
	
	function hobbies(){
		$sql = "SELECT * FROM hobbies";
		$query = main_query($sql);
			return $query;
	}
	
// -------------------------------------------------------------//
	
	function skills(){
		$sql = "SELECT * FROM skills";
		$query = main_query($sql);
			return $query;
	}
	
// -------------------------------------------------------------//
	
	
	function message($email,$name, $phone, $subject,$message){
            $sql = "INSERT INTO messages(sender_email,sender_name,phone,subject,message)VALUES('$email', '$name', '$phone', '$subject', '$message')";
            $query = main_query($sql);
            return $query;
        }
		
// -------------------------------------------------------------//
		
		
	function appointment($name, $email, $phone, $date, $time, $message){
		$sql = "INSERT INTO appointment(name, email, phone, date, time, message)VALUES('$name', '$email', '$phone', '$date', '$time', '$message')";
		$query = main_query($sql);
		return $query;
   } 
   
 // -------------------------------------------------------------//	

	function limit_word($string,$word_limit){
		
		$words = explode(" ",$string);
		return implode(" ",array_slice($words,0,$word_limit));
		
	}
	
// -------------------------------------------------------------//
	
	function service_details($details){
		$sql = "SELECT * FROM services WHERE id='".$details."'";
		$query = main_query($sql);
			return $query;
	}

// -------------------------------------------------------------//
	
	function article_details($details){
		$sql = "SELECT * FROM article WHERE id='".$details."'";
		$query = main_query($sql);
			return $query;
	}

// -------------------------------------------------------------//
	
	function late_article(){
		$sql = "SELECT * FROM article ORDER BY id DESC LIMIT 5";
		$query = main_query($sql);
			return $query;
	}
	
// -------------------------------------------------------------//
	
	function get_conversation($ids,$stu_email){
		$sql = "SELECT * FROM inbox WHERE id='".$ids."' AND student_email='".$stu_email."'";
		$query = main_query($sql);
			return $query;
	}
	
// -------------------------------------------------------------//

function get_conversation2($ids){
		$sql = "SELECT * FROM inbox WHERE id='".$ids."'";
		$query = main_query($sql);
			return $query;
	}
	
// -------------------------------------------------------------//

?>