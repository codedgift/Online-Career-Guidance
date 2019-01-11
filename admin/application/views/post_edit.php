<section id="main_content">

    <div class="container">

         <h3>Edit My Articles</h3>
        <div class="row">
            

            
            <aside class="col-md-3">
                <div class=" box_style_1">

                    <div class="widget">
                        
						  <p style="font-weight: bold; font-size: 16px;">My Articles</p>

                        <ul class="recent_post">
                            <?php 
                                foreach ($posts as $val) {
                                    
                                    echo '<li>
                                
                                <div><a href="'.  base_url().'pages/service_edit/'.$val->id.'">'.$val->name.' </a> <br />'
                                            . '<a href="'.base_url().'pages/service_edit/'.$val->id.'">Edit</a> &nbsp; | &nbsp; <a href="#" onclick="post_del('.$val->id.')">Delete</a></small></div>
										</li>';
                                }
                            ?>
                            
                        </ul>
                    </div><!-- End widget -->

                </div><!-- End box-sidebar -->
            </aside><!-- End aside -->
            <div class="col-md-9">
                <h4>Edit <?= $post_details['name'] ?> </h4>
                <hr>
                <?= form_open() ?>

                <?= $status ?>
                
                <div class="post">

                     <div class="form-group">
                      <span style="font-weight: bold;">Name</span> <span style="font-size: 12px; color: gray; font-weight: none;"> ( Enter your article name i.e Article Subject )</span>
                        <input type="text" name="txtTopic" class="form-control" value="<?= $post_details['name'] ?>" placeholder="Type your Article Name Here" required="">
                        
                    </div>
					
                    
                    <div class="form-group">
                       <span style="font-weight: bold;">Image</span>
                        <img src="<?= base_url() ?>../assets/article/<?= $post_details['image'] ?>" width="500" height="290" style="border: 4px solid #000; border-radius: 15px;" />
                                        <input type="file" name="userfile" id="userfile" class="form-control" />
                        
                    </div>
                    
                    
                     <div class="form-group">
                        <span style="font-weight: bold;">Services Description</span> <span style="font-size: 12px; color: gray; font-weight: none;"> ( Enter your article description that goes alongside your article name )</span>
                        <textarea rows="15" id="editor1" name="txtBrief" class="form-control" placeholder="Write something about your article" style="height:250px;" required><?= $post_details['description']; ?></textarea><br>
                        
                        <input type="submit" value="Update Service" class="button_big"/>
                    </div>


                </div>



                <hr>

                <?= form_close() ?>
            </div><!-- End col-md-8-->   


        </div>
    </div><!-- End container -->
</section><!-- End main_content-->

