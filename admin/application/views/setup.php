<section id="login_bg">
<div  class="container">
<div class="row">
	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
		<div id="login">
                        <h3>Set up your Website</h3>
                        <h4><?php echo validation_errors(); ?></h4>
                        <h4>    <?php echo $status ?></h4>
			<?php echo form_open() ?>
       
                        
                        <div class="form-group">
                            <input type="text" name="txtBiz" class=" form-control " placeholder="Business Name" required="">
					<span class="input-icon"><i class=" icon-home"></i></span>
				</div>
				<div class="form-group">
                                    <input type="text" name="txtName" class=" form-control " placeholder="Your Fullname" required>
					<span class="input-icon"><i class=" icon-user"></i></span>
				</div>
                        
                        <div class="form-group">
                            <input type="email" name="txtEmail" class=" form-control " placeholder="Email" required>
					<span class="input-icon"><i class=" icon-email"></i></span>
				</div>
                        
                        
                        <div class="form-group">
                            <input type="password" name="txtPasword" class=" form-control " placeholder="Password" required>
					<span class="input-icon"><i class=" icon-lock"></i></span>
				</div>
                        
                                <input type="submit" name="btnLogin" value="Submit" class="button_fullwidth" />
			<?php echo form_close() ?>
		</div>
	</div>
</div>
</div>
</section> <!-- End login -->