
<section id="main_content">

<div class="container">

      <div class="row">
         <div class="col-md-12">
             <h4>Change Password</h4>
                    
                                <div class="tab-content">
                                    <?php echo form_open() ?>
				<div class="row">
                                    <h4><?php echo validation_errors(); ?></h4>
                                <h4><?php echo $status ?></h4>
					<div class="col-md-6">
						<ul class="data-list">
                                                    <li>Old Password: <div class="form-group"><input type="password" name="txtOldPass" class="required form-control" placeholder="Your Old Password" required><span class="input-icon"><i class="icon-lock"></i></span></div></li>
                                                    <li>New Password<div class="form-group"><input type="password" name="txtNewPass" class="required form-control" placeholder="Your New Password"  required><span class="input-icon"><i class="icon-lock"></i></span></div></li>
                                                    <li>Confirm New Password<div class="form-group"><input type="password" name="txtNewPass2" class="required form-control" placeholder="Confirm Your New Password"  required><span class="input-icon"><i class="icon-lock"></i></span></div></li>
                                                        
						</ul>
					</div><!-- end col-md-6 -->
				</div><!-- end row -->
                                
                                <div class="row">
                                    <div class="col-md-6">
                                    <input type="submit" name="btnSub" value="Submit" id="complete1" />
                                    </div>
                                </div>
                                <!-- end step-->
            
            
	<?php echo form_close() ?>
    
</div><!-- end Survey container -->

      </div>   
    </div><!-- End row-->   
</div><!-- End container -->
</section><!-- End main_content-->

