<section id="login_bg">
<div  class="container">
<div class="row">
	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
		<div id="login">
			<p class="text-center">
                        <h2>Forgot Password</h2>
			</p>
                        <h4><?php echo validation_errors(); ?></h4>
                        <h4>    <?php echo $status ?></h4>
			<hr>
			<?php echo form_open() ?>
       
				<div class="form-group">
                                    <input type="email" name="txtForgotEmail" class=" form-control " placeholder="Input Your Email">
					<span class="input-icon"><i class=" icon-email"></i></span>
				</div>
                                <input type="submit" name="btnLogin" value="Reset Password" class="button_fullwidth" />
				<a href="<?php echo base_url() ?>users/register " class="button_fullwidth-2">Register</a>
			<?php echo form_close() ?>
		</div>
	</div>
</div>
</div>
</section> <!-- End login -->