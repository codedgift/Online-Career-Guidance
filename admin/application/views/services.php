
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/css/prettify.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/src/bootstrap-wysihtml5.css">
<section id="main_content">

    <div class="container">

        <h3>Edit Services</h3>
        <div class="row">
            

            
            <aside class="col-md-3">
                <div class=" box_style_1">

                    <div class="widget">
                        <h4>My Services</h4>

                        <ul class="recent_post">
                            <?php 
                                foreach ($services as $serv) {
                                    
                                    echo '<li>
                                
                                <div><a href="'.  base_url().'pages/service_edit/'.$serv->id.'">'.$serv->service_name.' </a> <br />'
                                            . '<a href="'.base_url().'pages/service_edit/'.$serv->id.'">Edit</a> &nbsp; | &nbsp; <a href="#" onclick="delete_serv('.$serv->id.')">Delete</a></small></div>
                            </li>';
                                }
                            ?>
                            
                        </ul>
                    </div><!-- End widget -->

                </div><!-- End box-sidebar -->
            </aside><!-- End aside -->
            <div class="col-md-9">
                <?= form_open() ?>

                <?= $status ?>
                
                <div class="post">

                    
                    <div class="form-group">
                        Service Name
                        <input type="text" name="txtTopic" class="form-control" placeholder="Type your service name" required="">
                        
                    </div>
                    
                    <div class="form-group">
                        Service Description
                        <textarea rows="15" id="editor1" name="txtDesc" class="form-control" placeholder="Write your service description" style="height:250px;" required></textarea><br>
                        
                        <input type="submit" value="Post Service" class="button_big"/>
                    </div>


                </div>
                



                <hr>

                <?= form_close() ?>
            </div><!-- End col-md-8-->   


        </div>
    </div><!-- End container -->
</section><!-- End main_content-->

