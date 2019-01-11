<section id="login_bg">
<div  class="container">
<div class="row">
	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
		<div id="login">
			<p class="text-center">
                        <h2>Login</h2>
			</p>
                        <h4><?php echo validation_errors(); ?></h4>
                        <h4>    <?php echo $status ?></h4>
			<hr>
			<?php echo form_open() ?>
       
				<div class="form-group">
                                    <input type="text" name="txtLoginEmail" class=" form-control " placeholder="Email">
					<span class="input-icon"><i class=" icon-email"></i></span>
				</div>
				<div class="form-group" style="margin-bottom:5px;">
                                    <input name="txtLoginPass" type="password" class=" form-control" placeholder="Password" style="margin-bottom:5px;">
					<span class="input-icon"><i class="icon-lock"></i></span>
				</div>
				<p class="small">
					<!-- <a href="<?php echo base_url() ?>users/forgot_password">Forgot Password?</a> -->
				</p>
                                <input type="submit" name="btnLogin" value="Log in" class="button_fullwidth" />
			<?php echo form_close() ?>
		</div>
	</div>
</div>
</div>
</section> <!-- End login -->