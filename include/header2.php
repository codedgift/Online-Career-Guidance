<?php 

	include("config/function.php");
	
	$home = page_query("home");
	$career = page_query("career");
	$job = page_query("job");
	$contact = page_query("contact");
	$dashboard = page_query("dashboard");
	$edit = page_query("edit");
	$inbox = page_query("inbox");
	$article = page_query("article");
	$my_career = page_query("my_career");
	$password = page_query("password");
	$profile = page_query("profile");
	$logout = page_query("logout");
	$reg_page = page_query("register");
	$counsel = page_query("con_dashboard");
	$conversation = page_query("conversation");
	
	$details = details();
	
	$articles = article();

	
	$career_category = career_category();
	
	//$inbox_del = inbox();
	
	session_start();
		
		$user_check = $_SESSION['login_user'];
		$sql = "SELECT * FROM user WHERE username='".$user_check."'";
		$query = main_query($sql);
			
			$row = mysqli_fetch_assoc($query);
			$login_session = $row['username'];
			$first_name = $row['first_name'];
			$identity = $row['identity'];
			$last_name = $row['last_name'];
			$phone = $row['phone'];
			$email = $row['email'];
			$address = $row['address'];
			$state = $row['state'];
			$gender = $row['gender'];
			$about_me = $row['about_me'];
		
				if(!isset($login_session)){
					//Close Connection
					mysqli_close();
					
					// Redirect To Home Page 
					header("Location: index.php");
				}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from templates.scriptsbundle.com/opportunities/demo/index7.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Oct 2016 14:20:57 GMT -->
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="ScriptsBundle">
<title>
		<?php 
		
			if($page === "home"){
				echo $details['business_name']." | Home";
			}elseif($page === "career"){
				echo $career['page_title']." | ".$details['business_name'];
			}elseif($page === "job"){
				echo $job['page_title']." | ".$details['business_name'];
			}elseif($page === "contact"){
				echo $contact['page_title']." | ".$details['business_name'];
			}elseif($page === "dashboard"){
				echo $first_name." ".$last_name." | ".$dashboard['page_title'];
			}elseif($page === "edit"){
				echo $first_name." ".$last_name." | ".$edit['page_title'];
			}elseif($page === "my_career"){
				echo $first_name." ".$last_name." | ".$my_career['page_title'];
			}elseif($page === "inbox"){
				echo $inbox['page_title']." | ".$details['business_name'];
			}elseif($page === "conversation"){
				echo $conversation['page_title']." | ".$details['business_name'];
			}elseif($page === "password"){
				echo $password['page_title']." | ".$details['business_name'];
			}
		
		?>
	</title>
    <!-- Favicons Icon -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- BOOTSTRAPE STYLESHEET CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- JQUERY SELECT CSS -->
    <link href="css/select2.min.css" rel="stylesheet" />

    <!-- JQUERY MENU CSS -->
    <link rel="stylesheet" href="css/mega_menu.min.css">

    <!-- ANIMATION -->
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- OWl  CAROUSEL-->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.style.css">

    <!--  REVOLUTION STYLE SETTING -->
    <link href="js/revolution/css/settings.css" rel="stylesheet" type="text/css" />

    <!-- TEMPLATE CORE CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/et-line-fonts.css" type="text/css">

    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,600italic,700,700italic,900italic,900,300,300italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">

    <!-- JavaScripts -->
    <script src="js/modernizr.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- TOASTER JS -->
       

</head>
<body>
<div class="page">
    <!--<div id="spinner">
        <div class="spinner-img"> <img alt="Opportunities Preloader" src="images/loader.gif" />
            <h2>Please Wait.....</h2>
        </div>
    </div> -->
    <nav id="menu-1" class="mega-menu fa-change-black" data-color=""> 
        <section class="menu-list-items"> 
           <ul class="menu-logo">
                <li> <a href="index.php"> <img src="<?= "assets/logo/".$details['logo']?>" alt="logo" class="img-responsive"> </a> </li>
            </ul>
            <ul class="menu-links pull-right">
			<li> <a href="index.php"> <i class="fa fa-home fa-indicator"></i>  <?= $home['page_title']; ?></a></li>
				<li> <a href="articles.php"> <i class="fa fa-home fa-book"></i>  <?= $career['page_title']; ?></a></li>
				<li> <a href="counsellor_dashboard.php"> <i class="fa fa-home fa-mortar-board"></i>  <?= $counsel['page_title']; ?></a></li>
				<li> <a href="contact.php"> <i class="fa fa-home fa-pencil-square"></i>  <?= $contact['page_title']; ?></a></li>
	
				<!-- <li class="no-bg"><a href="#" class="p-job"><i class="fa fa-plus-square"></i> Post Job</a></li> -->
				<!-- <li class="no-bg login-btn-no-bg"><a href="logout.php" class="login-header-btn"><i class="fa fa-sign-in"></i> Logout</a></li> -->
				<li class="profile-pic"> <a href="javascript:void(0)"> <img src="images/admin.jpg" alt="user-img" class="img-circle" width="36"><span class="hidden-sm"><?= $first_name;?> </span><i class="fa fa-angle-down fa-indicator"></i> </a>
					<ul class="drop-down-multilevel left-side">
						<li>
							<a href="dashboard.php"> <i class="fa fa-user"></i> <?= $profile['page_title']?></a>
						</li>
						<li>
							<a href="edit_profile.php"> <i class="fa fa-edit"></i> <?= $edit['page_title']?></a>
						</li>
						<li>
							<a href="inbox.php"> <i class="fa fa-envelope"></i> <?= $inbox['page_title']?></a>
						</li>
						<li>
							<a href="my_career.php"> <i class="fa  fa-institution"></i> <?= $my_career['page_title']?></a>
						</li>
						<li>
							<a href="articles.php"> <i class="fa  fa-list-ul"></i> <?= $article['page_title']?></a>
						</li>
						<li>
							<a href="change_password.php"> <i class="fa  fa-lock"></i> <?= $password['page_title']?></a>
						</li>
						<li>
							<a href="logout.php"> <i class="fa  fa-power-off"></i> <?= $logout['page_title']?></a>
						</li>
					</ul>
                    </li>
           </ul>
        </section>
    </nav>
    <div class="clearfix"></div>
		