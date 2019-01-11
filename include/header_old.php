<?php 

	include("config/function.php");
	
	$home = page_query("home");
	$career = page_query("career");
	$job = page_query("job");
	$contact = page_query("contact");
	
	$details = details();

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="ScriptsBundle">
    <title>
		<?php 
		
			if($page === "home"){
				echo $details['business_name']." | Home";
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
    <style></style>
</head>

<body>
    <div class="page">
        <div id="spinner">
            <div class="spinner-img"> <img alt="Opportunities Preloader" src="images/loader.gif" />
                <h2>Please Wait.....</h2>
            </div>
        </div>
        <nav id="menu-1" class="mega-menu fa-change-black" data-color=""> 
              <section class="menu-list-items"> 
            <ul class="menu-logo">
                <li> <a href="index.html"> <img src="images/logo.png" alt="logo" class="img-responsive"> </a> </li>
            </ul>
            <ul class="menu-links pull-right">
                <li> <a href="javascript:void(0)"> Home <i class="fa fa-angle-down fa-indicator"></i></a>
                    <ul class="drop-down-multilevel">
                        <li><a href="index.html"><i class="fa fa-angle-right"></i> Home Default</a></li>
                        <li><a href="index2.html"><i class="fa fa-angle-right"></i> Home Text Rotator</a></li>
                        <li><a href="index3.html"><i class="fa fa-angle-right"></i> Home Transparent</a></li>
                        <li><a href="index4.html"><i class="fa fa-angle-right"></i> Home With Slider</a></li>
                        <li><a href="index5.html"><i class="fa fa-angle-right"></i> Home 5 (Static Sections)</a></li>
                        <li><a href="index6.html"><i class="fa fa-angle-right"></i> Home Advance Search</a></li>
                        <li><a href="javascript:void(0)">Breadcrumb <i class="fa fa-angle-right fa-indicator"></i> </a> 
                        	<ul class="drop-down-multilevel">
                                <li><a href="aboutus.html"> <i class="fa fa-forumbee"></i> Breadcrumb style 1</a></li>
                                <li><a href="breadcrumb-2.html"> <i class="fa fa-hotel"></i> Breadcrumb style 2</a></li>
                                <li><a href="breadcrumb-3.html"> <i class="fa fa-automobile"></i> Breadcrumb style 3</a></li>
                                <li><a href="breadcrumb-4.html"> <i class="fa fa-automobile"></i> Breadcrumb style 4</a></li>
                                <li><a href="breadcrumb-5.html"> <i class="fa fa-automobile"></i> Breadcrumb style 5</a></li>
                                <li><a href="breadcrumb-6.html"> <i class="fa fa-automobile"></i> Breadcrumb style 6</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Footer <i class="fa fa-angle-right fa-indicator"></i> </a> 
                        	<ul class="drop-down-multilevel">
                                <li><a href="footer-fixed.html"> <i class="fa fa-forumbee"></i> Footer Fixed</a></li>
                                <li><a href="footer-normal.html"> <i class="fa fa-hotel"></i> Footer Normal</a></li>
                                <li><a href="footer-small.html"> <i class="fa fa-automobile"></i> Footer Small</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="javascript:void(0)"> Pages <i class="fa fa-angle-down fa-indicator"></i></a> 
                    
                    <ul class="drop-down-multilevel">
                    	<li><a href="users.html">Freelancers</a></li>
                        <li><a href="single-job.html">Single Job Style 1</a></li>
                        <li><a href="single-job2.html">Single Job Style 2</a></li>
                        <li><a href="javascript:void(0)">About Us <i class="fa fa-angle-right fa-indicator"></i> </a> 
                            <ul class="drop-down-multilevel left-side">
                                <li><a href="aboutus.html"> <i class="fa fa-forumbee"></i> About Us 1</a></li>
                                <li><a href="aboutus2.html"> <i class="fa fa-hotel"></i> About Us 2</a></li>
                                <li><a href="aboutus3.html"> <i class="fa fa-automobile"></i> About Us 3</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Contact Us <i class="fa fa-angle-right fa-indicator"></i> </a> 
                            <ul class="drop-down-multilevel left-side">
                                <li><a href="contactus.html"> <i class="fa fa-forumbee"></i> Contact Us 1</a></li>
                                <li><a href="contactus2.html"> <i class="fa fa-hotel"></i> Contact Us 2</a></li>
                                <li><a href="contactus3.html"> <i class="fa fa-automobile"></i> Contact Us 3</a></li>
                                <li><a href="contactus4.html"> <i class="fa fa-bookmark"></i> Contact Us 4</a></li>
                                <li><a href="contactus5.html"> <i class="fa fa-bell"></i> Contact Us 5</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Login pages <i class="fa fa-angle-right fa-indicator"></i> </a> 
                            <ul class="drop-down-multilevel left-side">
                                <li><a href="login.html"> <i class="fa fa-forumbee"></i> Login Style 1</a></li>
                                <li><a href="login-2.html"> <i class="fa fa-hotel"></i> Login Style 2</a></li>
                                <li><a href="login-3.html"> <i class="fa fa-automobile"></i> Login Style 3</a></li>
                                <li><a href="login-4.html"> <i class="fa fa-bookmark"></i> Login Style 4</a></li>
                                <li><a href="login-5.html"> <i class="fa fa-bell"></i> Login Style 5</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Registration pages <i class="fa fa-angle-right fa-indicator"></i> </a> 
                            <ul class="drop-down-multilevel left-side">
                                <li><a href="register.html"> <i class="fa fa-forumbee"></i> Register Style 1</a></li>
                                <li><a href="register-2.html"> <i class="fa fa-hotel"></i> Register Style 2</a></li>
                                <li><a href="register-3.html"> <i class="fa fa-automobile"></i> Register Style 3</a></li>
                                <li><a href="register-4.html"> <i class="fa fa-bookmark"></i> Register Style 4</a></li>
                                <li><a href="register-5.html"> <i class="fa fa-bell"></i> Register Style 5</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Coming Soon Pages <i class="fa fa-angle-right fa-indicator"></i> </a> 
                            <ul class="drop-down-multilevel left-side">
                                <li><a href="comingsoon.html"> <i class="fa fa-forumbee"></i> Coming Soon 1</a></li>
                                <li><a href="comingsoon2.html"> <i class="fa fa-hotel"></i> Coming Soon 2</a></li>
                                <li><a href="comingsoon3.html"> <i class="fa fa-automobile"></i> Coming Soon 3</a></li>
                                <li><a href="comingsoon4.html"> <i class="fa fa-bookmark"></i> Coming Soon 4</a></li>
                                <li><a href="comingsoon5.html"> <i class="fa fa-bell"></i> Coming Soon 5</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Error 404 Pages<i class="fa fa-angle-right fa-indicator"></i> </a> 
                            <ul class="drop-down-multilevel left-side">
                                <li><a href="404.html"> <i class="fa fa-forumbee"></i> 404 Style 1</a></li>
                                <li><a href="404-2.html"> <i class="fa fa-hotel"></i> 404 Style 2</a></li>
                                <li><a href="404-3.html"> <i class="fa fa-automobile"></i> 404 Style 3</a></li>
                                <li><a href="404-4.html"> <i class="fa fa-bookmark"></i> 404 Style 4</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="javascript:void(0)">Mega Menu <i class="fa fa-angle-down fa-indicator"></i></a> 
                    <div class="grid-col-12 drop-down"> 
                        <div class="grid-row"> 
                            <div class="grid-col-2">
                                <h4>Company Pages</h4>
                                <ul>
                                    <li><a href="company-dashboard.html"> <i class="fa fa-angle-right"></i> Dashboard</a></li>
                                    <li><a href="company-dashboard-edit-profile.html"> <i class="fa fa-angle-right"></i> Edit Profile</a></li>
                                    <li><a href="company-dashboard-active-jobs.html"> <i class="fa fa-angle-right"></i> Active Jobs</a></li>
                                    <li><a href="company-dashboard-followers.html"> <i class="fa fa-angle-right"></i> Followers</a></li>
                                    <li><a href="company-dashboard-resume.html"> <i class="fa fa-angle-right"></i> Job Resume</a></li>
                                </ul>
                            </div>
                            <div class="grid-col-2">
                                <h4>User Pages</h4>
                                <ul>
                                    <li><a href="user-dashboard.html"> <i class="fa fa-angle-right"></i> User Dashboard</a></li>
                                    <li><a href="user-edit-profile.html"> <i class="fa fa-angle-right"></i> User Edit Profile</a></li>
                                    <li><a href="user-followed-companies.html"> <i class="fa fa-angle-right"></i> Followed Companies</a></li>
                                    <li><a href="user-job-applied.html"> <i class="fa fa-angle-right"></i> Job Applied</a></li>
                                    <li>
                                        <a href="user-resume.html"> <i class="fa fa-angle-right"></i> Use Resume</a>
                                    </li>
                                    <li>
                                        <a href="users.html"> <i class="fa fa-angle-right"></i> All Users </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="grid-col-2">
                                <h4>Blog Pages</h4>
                                <ul>
                                    <li><a href="blog1.html"> <i class="fa fa-angle-right"></i> Grid Right sidebar</a></li>
                                    <li><a href="blog2.html"> <i class="fa fa-angle-right"></i> Blog No Sidebar</a></li>
                                    <li><a href="blog3.html"> <i class="fa fa-angle-right"></i> Blog Listing</a></li>
                                    <li><a href="blog4.html"> <i class="fa fa-angle-right"></i> Left Sidebar</a></li>
                                    <li><a href="blog5.html"> <i class="fa fa-angle-right"></i> Grid Right sidebar </a></li>
                                    <li><a href="blog-single.html"> <i class="fa fa-angle-right"></i> Single Blog 1</a></li>
                                    <li><a href="blog-single2.html"> <i class="fa fa-angle-right"></i> Single Blog 2</a></li>
                                </ul>
                            </div>
                            <div class="grid-col-2">
                                <h4>Job pages</h4>
                                <ul>
                                    <li><a href="job-category1.html"> <i class="fa fa-angle-right"></i> Job Listing 1</a></li>
                                    <li><a href="job-category2.html"> <i class="fa fa-angle-right"></i> Job Listing 2</a></li>
                                    <li><a href="post-job.html"> <i class="fa fa-angle-right"></i> Job Post 1</a></li>
                                    <li><a href="post-job2.html"> <i class="fa fa-angle-right"></i> Job Post 2</a></li>
                                    <li><a href="post-job3.html"> <i class="fa fa-angle-right"></i> Job Post 3 </a></li>
                                    <li><a href="post-job-wizard.html"> <i class="fa fa-angle-right"></i> Job Post Wizard</a></li>
                                </ul>
                            </div>
                            <div class="grid-col-2">
                                <h4>Resume Pages</h4>
                                <ul>
                                    <li><a href="resume.html"> <i class="fa fa-angle-right"></i> Resume Style 1</a></li>
                                    <li><a href="resume2.html"> <i class="fa fa-angle-right"></i> Resume Style 2</a></li>
                                    <li><a href="resume3.html"> <i class="fa fa-angle-right"></i> Resume Style 3</a></li>
                                    <li><a href="resume4.html"> <i class="fa fa-angle-right"></i> Resume Style 4</a></li>
                                    <li><a href="resume5.html"> <i class="fa fa-angle-right"></i> Resume Style 5 </a></li>
                                    <li><a href="resume6.html"> <i class="fa fa-angle-right"></i> Resume Style 6</a></li>
                                </ul>
                            </div>
                            <div class="grid-col-2">
                                <h4>Other pages</h4>
                                <ul>
                                    <li><a href="single-job.html"> <i class="fa fa-angle-right"></i> Single Job 1</a></li>
                                    <li><a href="single-job2.html"> <i class="fa fa-angle-right"></i> Single job 2</a></li>
                                    <li><a href="pricing.html"> <i class="fa fa-angle-right"></i> Pricing Tables</a></li>
                                    <li><a href="faq.html"> <i class="fa fa-angle-right"></i> FAQ's</a></li>
                                    <li><a href="all-categories.html"> <i class="fa fa-angle-right"></i> All Categories</a></li>
                                    <li><a href="all-company.html"> <i class="fa fa-angle-right"></i> All Companies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="no-bg"><a href="#" class="p-job"><i class="fa fa-plus-square"></i> Post a Job</a></li>
                <li class="no-bg login-btn-no-bg"><a href="#" class="login-header-btn"><i class="fa fa-sign-in"></i> Log in</a></li>
            </ul>
        </section>
        </nav>
        <div class="clearfix"></div>
