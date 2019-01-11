<section id="main_content">

    <div class="container">

        <h3>Edit Mission &amp; Vision</h3>
        <div class="row">
            

            <div class="col-md-12">
                <?= form_open() ?>

                <?= $status ?>
                
                <div class="post">

                    <div class="row">
                    <div class="form-group">
                        <div class="col-lg-1">Mission</div>
                        <div class="col-lg-7">
                            <textarea rows="7"  name="txtM" class="form-control" placeholder="Write your message" style="height:150px;" required><?= $page_det["mission"] ?></textarea><br>
                        
                        </div>
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="form-group">
                        <div class="col-lg-1">Vision</div>
                        <div class="col-lg-7">
                        <textarea rows="7"  name="txtV" class="form-control" placeholder="Write your message" style="height:150px;" required><?= $page_det["vision"] ?></textarea><br>
                        <input type="submit" value="Update" class="button_medium"/>
                        </div>
                    </div>
                    </div>


                </div>
                



                <hr>

                <?= form_close() ?>
            </div><!-- End col-md-8-->   


        </div>
    </div><!-- End container -->
</section><!-- End main_content-->

