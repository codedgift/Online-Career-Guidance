<section id="main_content">

    <div class="container">

        <h3>Edit Portfolio/Works</h3>
        <div class="row">
            

            
            <aside class="col-md-3">
                <div class=" box_style_1">

                    <div class="widget">
                        <h4>Team Members</h4>

                        <ul class="recent_post">
                            <?php 
                                foreach ($team as $port) {
                                    
                                    echo '<li>
                                
                                <div>'.$port->staff_name.'  <small> | <a href="#" onclick="delete_team('.$port->id.')">Delete</a></small></div>
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
                        Name
                        <input type="text" name="txtName" class="form-control" placeholder="Type team member name" required="">
                        
                    </div>
                    
                    <div class="form-group">
                        Position
                        <input type="text" name="txtPos" class="form-control" placeholder="Type the position" required="">
                        
                    </div>
                    
                    
                    
                    <div class="form-group">
                        Member Photo
                                        <input type="file" name="userfile" id="userfile" class="form-control" />
                        
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        
                        <input type="submit" value="Add member" class="button_big"/>
                    </div>


                </div>
                



                <hr>

                <?= form_close() ?>
            </div><!-- End col-md-8-->   


        </div>
    </div><!-- End container -->
</section><!-- End main_content-->

