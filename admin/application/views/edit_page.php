
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/css/prettify.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/src/bootstrap-wysihtml5.css">
<section id="main_content">

    <div class="container">

        <h3>Edit <?= $page_det["page_title"] ?></h3>
        <div class="row">
            

            <div class="col-md-12">
                <?= form_open() ?>

                <?= $status ?>
                
                <div class="post">

                    
                    <div class="form-group">
                        <div class="col-lg-2">Page Title</div>
                        <div class="col-lg-10">
                        <input type="text" name="txtTitle" class="form-control" placeholder="Type your forum topic" required="" value="<?= $page_det["page_title"] ?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-lg-2">
                            
                            <?php 
                            if($page === "home")
                            {
                                echo 'Header Caption';
                            }else{
                                echo 'Page Brief';
                            }
                            ?>
                        </div>
                         <div class="col-lg-10">
                        <input type="text" name="txtBrief" class="form-control" placeholder="Type your forum topic" required="" value="<?= $page_det["page_brief"] ?>">
                         </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-lg-2">
                            <?php 
                            if($page === "home")
                            {
                                echo 'Welcome message';
                            }else{
                                echo 'Page Content';
                            }
                            ?>
                            </div>
                        <div class="col-lg-10">
                        <textarea rows="15" id="editor1" name="txtContent" class="form-control" placeholder="Write your message" style="height:250px;" required><?= $page_det["page_content"] ?></textarea><br>
                        <input type="submit" value="Update" class="button_medium"/>
                        </div>
                    </div>


                </div>
                



                <hr>

                <?= form_close() ?>
            </div><!-- End col-md-8-->   


        </div>
    </div><!-- End container -->
</section><!-- End main_content-->

