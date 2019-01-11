<?php 
ob_start();
session_start();

$page = "password";
$active = "password";

	
	include("include/header3.php");
	include("include/password_val2.php");
	
	
	if(!(isset($_SESSION['login_counsellor']))){
			header("Location: counsellor_login.php");
	}
	

?>

	<section class="job-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-7 co-xs-12 text-left">
					<h3><?= $password['page_title']?></h3>
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
						<?php
							echo $error; 
							echo $success; 
						?>
                           <!-- <div class="heading-inner first-heading">
                                <p class="title">Edit Profile</p>
                            </div> -->
                            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                <div class="profile-edit row">
                                    <form action="" method="POST">
									
                                        <div class="col-md-8 col-sm-12">
                                            <div class="form-group">
                                                <label>Old Password <span class="required"></span></label>
                                                <input type="password" placeholder="" name="old_pass" id="old_pass" style="font-weight: bold;" class="form-control" required="">
                                            </div>
                                        </div>
										
										<div class="col-md-8 col-sm-12">
                                            <div class="form-group">
                                                <label>New Password <span class="required"></span></label>
                                                <input type="password" placeholder="" name="new_pass" id="new_pass" style="font-weight: bold;" class="form-control" required="">
                                            </div>
                                        </div>
										
										<div class="col-md-8 col-sm-12">
                                            <div class="form-group">
                                                <label>Confirm New Password <span class="required"></span></label>
                                                <input type="password" placeholder="" name="con_pass" id="con_pass" style="font-weight: bold;" class="form-control" required="">
                                            </div>
                                        </div>
										
                                        <div class="col-md-12 col-sm-12">
                                            <button class="btn btn-default pull-left" type="submit" name="changes" > Change Password <i class="fa fa-angle-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		
        <?php include("include/footer.php"); ?>
