<?php 
ob_start();
//session_start();

$page = "con_dashboard";
$active = "con_dashboard";

	include("include/counsel_val.php");
	include("include/header3.php");

	if(!(isset($_SESSION['login_counsellor']))){
			header("Location: counsellor_login.php");
	}
	
	

?>

	<section class="job-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-7 co-xs-12 text-left">
					<h3><?= $dashboard['page_title']?></h3>
				</div>
				<div class="col-md-6 col-sm-5 co-xs-12 text-right">
					<div class="bread">
						<ol class="breadcrumb">
							<li class="active">You Are Logged in</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
        </section>


        <section class="dashboard-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
             
					<?php 
					
						// Including Navigation side bar
						include("include/aside2.php"); 
					
					?>
						
        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="job-short-detail">
                                <div class="heading-inner">
                                    <p class="title" style="font-size: 45px; font-weight: bold;">Welcome : <?= $full_name?></p>
                                </div>
                                <!-- <dl>
                                    <dt>First Name:</dt>
                                    <dd>First Name</dd>

                                    <dt>Last Name:</dt>
                                    <dd> Last Name </dd>

                                    <dt>Phone:</dt>
                                    <dd> Phone</dd>

                                    <dt>Email:</dt>
                                    <dd> Email</dd>
									
									<dt>Gender:</dt>
                                    <dd> Gender</dd>

                                    <dt>Address:</dt>
                                    <dd> Address</dd>

                                    <dt>State Of Origin:</dt>
                                    <dd> State Of Origin</dd>

                                    <dt>Country:</dt>
                                    <dd>Somewere at Antarctica </dd>
                                </dl> -->
                            </div>

							<!--
                            <div class="heading-inner">
                                <p class="title">Some Line About Me</p>
                            </div>
                            <p style="text-align: justify;"><?= $about_me; ?></p> -->
                        </div>
						
                    </div>
                </div>
            </div>
        </section>
		
		
		   
	<div style="margin-top: 6%;">	
		<?php include("include/footer.php"); ?>
	</div>