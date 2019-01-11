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
                                
                                <div><a href="'.  base_url().'pages/post_edit/'.$val->id.'">'.$val->name.' </a> <br />'
                                            . '<a href="'.base_url().'pages/post_edit/'.$val->id.'">Edit</a> &nbsp; | &nbsp; <a href="#" onclick="post_del('.$val->id.')">Delete</a></small></div>
                            </li>';
                                }
                            ?>
                            
                        </ul>
                    </div><!-- End widget -->

                </div><!-- End box-sidebar -->
            </aside><!-- End aside -->
            <div class="col-md-9">
                <?= form_open_multipart('') ?>

                <?= $status ?>
                
                <div class="post">

                    
                    <div class="form-group">
                       <span style="font-weight: bold;">Article Name</span> <span style="font-size: 12px; color: gray; font-weight: none;"> ( Enter your a article subject )</span>
                        <input type="text" name="txtTopic" class="form-control" placeholder="Type your Article subject name here" required="">
                        
                    </div>
                    
                    <div class="form-group">
                        <span style="font-weight: bold;">Image</span> <span style="font-size: 12px; color: gray; font-weight: none;"> ( Upload a image that goes alongside your article name )</span>
                                        <input type="file" name="userfile" id="userfile" class="form-control" />
                        
                    </div>
                    
                    <div class="form-group">
                        <span style="font-weight: bold;">Article Description</span> <span style="font-size: 12px; color: gray; font-weight: none;"> ( Enter your article description that goes alongside your article name )</span>
                        <textarea rows="15" id="editor1" name="txtBrief" class="form-control" placeholder="Write something about your article here" style="height:250px;" required></textarea><br>
                        
                        <input type="submit" value="Add Article" class="button_big"/>
                    </div>


                </div>
                



                <hr>

                <?= form_close() ?>
            </div><!-- End col-md-8-->   


        </div>
    </div><!-- End container -->
</section><!-- End main_content-->

