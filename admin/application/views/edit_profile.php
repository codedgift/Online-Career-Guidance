
<section id="main_content">

    <div class="container">


        <div class="row">
            <div class="col-md-12">


                <div class="tab-content">
                    <?php echo form_open_multipart() ?>
                    <div class="row">
                        <h4><?php echo validation_errors(); ?></h4>
                        <h4><?php echo $status ?></h4>
                        <div class="col-md-6">
                            <h4>Basic Details</h4>
                            <ul class="data-list">
                                <li>Email: <div class="form-group"><input type="email" name="txtEmail" class="required form-control" placeholder="First name" value="<?php echo $details['email'] ?>" required><span class="input-icon"><i class="icon-email"></i></span></div></li>
                                <li>Full Name: <div class="form-group"><input type="text" name="txtName" class="required form-control" placeholder="Last name" value="<?php echo $details['fullname'] ?>" required><span class="input-icon"><i class="icon-user"></i></span></div></li>
                                <li>Business Name: <div class="form-group"><input type="text" name="txtBiz" class="required form-control" placeholder="Your Email" value="<?php echo $details['business_name'] ?>" required><span class="input-icon"><i class="icon-home"></i></span></div></li>
                                
                                
                                <li>
                                    Address: <textarea class="required form-control" name="txtAddr" placeholder="Type your address" rows="8" style="height: 120px !important"><?= $contact['address'] ?></textarea>

                                </li>
                                <li>
              
                          
                                    <!--Theme: 
                                    <div class="styled-select">
                                        <select class="form-control required" name="ddlTemplate" required>
                                            <option value="<?= $details['template'] ?>"><?= $details['template'] ?></option>
                                            <option value="template1">Template 1</option>
                                            <option value="template2">Template 2</option>
                                            <option value="template3">Template 3</option>
                                            <option value="template4">Template 4</option>
                                            <option value="template5">Template 5</option>
                                            <option value="template6">Template 6</option>

                                        </select>
                                    </div>-->
                                </li>
                                <li>
                                                          
                                </li>

                            </ul>
                            Website Color:
                            <div class="example-content-widget">
      <div id="cp2" class="input-group colorpicker-component">
          <input type="text" value="<?= $details['color'] ?>" class="form-control" name="txtColor"/>
          <span class="input-group-addon"><i></i></span>
      </div>
      <script>
          $(function () {
              $('#cp2').colorpicker();
          });
      </script>
        </div>
                        </div><!-- end col-md-6 -->

                        <div class="col-md-6">
                            <h4>Social Media Details</h4>


                            <ul class="data-list" style="margin:0; padding:0;">
                                <li>Phone: <div class="form-group"><input type="text" name="txtPhone" class="required form-control" placeholder="Your phone number" value="<?= $contact['phone'] ?>" required><span class="input-icon"><i class="icon-phone"></i></span></div>
                                </li>
                                <li>Facebook: <div class="form-group"><input type="text" name="txtFacebook" class="required form-control" placeholder="Your Facebook Url" value="<?php echo $contact['facebook'] ?>" required><span class="input-icon"><i class="icon-facebook"></i></span></div></li>
                                <li>Twitter: <div class="form-group"><input type="text" name="txtTwitter" class="required form-control" placeholder="Your Twutter Url" value="<?php echo $contact['twitter'] ?>" required><span class="input-icon"><i class="icon-twitter"></i></span></div></li>
                                <li>Linkedin: <div class="form-group"><input type="text" name="txtLinkedin" class="required form-control" placeholder="Your Linkedin Url" value="<?php echo $contact['linkedin'] ?>" required><span class="input-icon"><i class="icon-linkedin"></i></span></div></li>
                                <li>Skype: <div class="form-group"><input type="text" name="txtSkype" class="required form-control" placeholder="Your Skype username" value="<?php echo $contact['skype'] ?>" required><span class="input-icon"><i class="icon-skype"></i></span></div></li>
                                <li>Google+: <div class="form-group"><input type="text" name="txtGoogle" class="required form-control" placeholder="Your Google Url" value="<?php echo $contact['google'] ?>" required><span class="input-icon"><i class="icon-google"></i></span></div></li>

                            </ul>

                        </div><!-- end col-md-6 -->
                    </div><!-- end row -->


                    <div class="row" style="text-align: center">
                        <input type="submit" name="btnSub" value="Submit" id="complete1" />
                    </div>
                    <!-- end step-->


                    <?php echo form_close() ?>

                </div><!-- end Survey container -->

            </div>   
        </div><!-- End row-->   
    </div><!-- End container -->
</section><!-- End main_content-->

