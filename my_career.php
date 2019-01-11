<?php 

ob_start();
$page = "my_career";
$active = "my_career";

	include("include/header2.php");	 
	
	include("include/career_val.php");	
	

	
?>
	<section class="job-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-7 co-xs-12 text-left">
					<h3><?= $my_career['page_title']?></h3>
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
						include("include/aside.php");
					
					?>
					
                        <div class="col-md-8 col-sm-8 col-xs-12">
						<?php 
						
							echo $nice;
							echo $nice_error;
						
						?>
                            <div class="heading-inner first-heading">
                                <p class="title">Speak With A Counsellor</p>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                <div class="profile-edit row">
                                    <form action="" method="POST">
									
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Subject <span class="required">*</span></label>
                                                <input type="text" name="subject" value="<?php if($nice_error) : echo $subject; endif; ?>" placeholder="Enter Message Subject"  style="font-weight: bold;" class="form-control"/>
                                            </div>
                                        </div>
										
										 <div class="col-md-12 col-sm-12">
											<div class="form-group">
												<label >Choose A Category You Want Your Message To Be Directed To <span class="required">*</span></label>
												<select class="questions-category form-control" name="category" >
													<option value="Select" style="font-weight: bold;">Select</option>
														<?php 
														
															while($row_cat = $career_category->fetch_assoc()){
																$name = $row_cat['category_name'];
																
																echo "<option value='".$name."'>".$name."</option>";
																
															}
														
														?>
												</select>
											</div>
										</div>
										
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Your Message <span class="required">*</span></label>
                                                <textarea cols="6" rows="8" style="font-weight: bold;" name="msg"  placeholder="" class="form-control" ><?php if($nice_error) : echo $msg; endif; ?></textarea>
                                            </div>
                                        </div>
										
                                        <div class="col-md-12 col-sm-12">
                                            <button class="btn btn-default pull-right" type="submit" name="send_msg" > Send Message <i class="fa fa-angle-right"></i></button>
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