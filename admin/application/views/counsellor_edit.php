<section id="main_content">

    <div class="container">

        <h3>Edit Counsellor</h3>
        <div class="row">
            

            
            <aside class="col-md-3">
                <div class=" box_style_1">

                    <div class="widget">
                        <h4>My Counsellors</h4>

                        <ul class="recent_post">
                            <?php 
                                foreach ($counsellors as $couns) {
                                    
                                    echo '<li>
                                
                                <div><a href="'.  base_url().'pages/counsellor_edit/'.$couns->id.'">'.$couns->name.' </a> <br />'
                                            . '<a href="'.base_url().'pages/counsellor_edit/'.$couns->id.'">Edit</a> &nbsp; | &nbsp; <a href="#" onclick="delete_counsellor('.$couns->id.')">Delete</a></small></div>
                            </li>';
                                }
                            ?>
                            
                        </ul>
                    </div><!-- End widget -->

                </div><!-- End box-sidebar -->
            </aside><!-- End aside -->
            <div class="col-md-9">
                <h4>Edit <?= $coun_det['name'] ?> Portfolio</h4>
                <hr>
                <?= form_open() ?>

                <?= $status ?>
                
                <div class="post">

                    
                    <div class="form-group">
                         Counsellor Name
                        <input type="text" name="txtTopic" class="form-control" placeholder="Type Counsellor Name" value="<?= $coun_det['name'] ?>" required="">
                        
                    </div>
					
					<div class="form-group">
                        Email
                        <input type="email" name="txtEmail" class="form-control" placeholder="Type Counsellor Email" value="<?= $coun_det['email'] ?>" required="">
                        
                    </div>
					
					<div class="form-group">
                        Password
                        <input type="text" name="txtPassword" class="form-control" placeholder="Type Counsellor Password" value="<?= $coun_det['password'] ?>" required="">
                        
                    </div>
                    
                    Category
                    <div class="styled-select">
                        
                                        <select class="form-control required" name="ddlCat" required>
                                            <option value="template1">Select Category</option>
                                            <?php 
													foreach ($cats as $value) {
														if($coun_det['cat_id'] === $value->id)
														{
															echo '<option value="'.$value->cat_id.'" selected>'.$value->category_name.'</option>';
														}else{
															echo '<option value="'.$value->cat_id.'">'.$value->category_name.'</option>';
														}
														
														
													}
                                            ?>

                                        </select>
                                    </div>
                    
                    
                    <!-- <div class="form-group">
                        Portfolio Image
                        <img src="<?= base_url() ?>../assets/portfolio/<?= $port_det['portfolio_img'] ?>" width="300" />
                                        <input type="file" name="userfile" id="userfile" class="form-control" />
                        
                    </div> -->
                    
                    
                    <div class="form-group">
                        <!-- Portfolio Brief
                        <textarea rows="15" id="editor1" name="txtBrief" class="form-control" placeholder="Write a brief about this portfolio" style="height:250px;" required><?= $port_det['portfolio_brief'] ?></textarea><br>
                        -->
						
                        <input type="submit" value="Update Counsellor" class="button_big"/>
                    </div>


                </div>



                <hr>

                <?= form_close() ?>
            </div><!-- End col-md-8-->   


        </div>
    </div><!-- End container -->
</section><!-- End main_content-->

