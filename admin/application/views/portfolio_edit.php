<section id="main_content">

    <div class="container">

        <h3>Portfolio</h3>
        <div class="row">
            

            
            <aside class="col-md-3">
                <div class=" box_style_1">

                    <div class="widget">
                        <h4>Portfolios</h4>

                        <ul class="recent_post">
                            <?php 
                                foreach ($portfolios as $port) {
                                    
                                    echo '<li>
                                
                                <div><a href="'.  base_url().'pages/portfolio_edit/'.$port->id.'">'.$port->portfolio_name.' </a> <br />'
                                            . '<a href="'.base_url().'pages/portfolio_edit/'.$port->id.'">Edit</a> &nbsp; | &nbsp; <a href="#" onclick="delete_port('.$port->id.')">Delete</a></small></div>
                            </li>';
                                }
                            ?>
                            
                        </ul>
                    </div><!-- End widget -->

                </div><!-- End box-sidebar -->
            </aside><!-- End aside -->
            <div class="col-md-9">
                <h4>Edit <?= $port_det['portfolio_name'] ?> Portfolio</h4>
                <hr>
                <?= form_open() ?>

                <?= $status ?>
                
                <div class="post">

                    
                    <div class="form-group">
                        Portfolio Name
                        <input type="text" name="txtTopic" class="form-control" placeholder="Type your porfolio/work name" value="<?= $port_det['portfolio_name'] ?>" required="">
                        
                    </div>
                    
                    Category
                    <div class="styled-select">
                        
                                        <select class="form-control required" name="ddlCat" required>
                                            <option value="template1">Select Category</option>
                                            <?php 
                                                                        foreach ($cats as $value) {
                                                                            if($port_det['cat_id'] === $value->id)
                                                                            {
                                                                                echo '<option value="'.$value->id.'" selected>'.$value->category_name.'</option>';
                                                                            }else{
                                                                                echo '<option value="'.$value->id.'">'.$value->category_name.'</option>';
                                                                            }
                                                                            
                                                                            
                                                                        }
                                            ?>

                                        </select>
                                    </div>
                    
                    
                    <div class="form-group">
                        Portfolio Image
                        <img src="<?= base_url() ?>../assets/portfolio/<?= $port_det['portfolio_img'] ?>" width="300" />
                                        <input type="file" name="userfile" id="userfile" class="form-control" />
                        
                    </div>
                    
                    
                    
                    <div class="form-group">
                        Portfolio Url (Web link to the portfolio)
                        <input type="text" name="txtLink" class="form-control" placeholder="Type the link to this porfolio/work" value="<?= $port_det['portfolio_link'] ?>">
                        
                    </div>
                    
                    <div class="form-group">
                        Portfolio Brief
                        <textarea rows="15" id="editor1" name="txtBrief" class="form-control" placeholder="Write a brief about this portfolio" style="height:250px;" required><?= $port_det['portfolio_brief'] ?></textarea><br>
                        
                        <input type="submit" value="Add Portfolio" class="button_big"/>
                    </div>


                </div>



                <hr>

                <?= form_close() ?>
            </div><!-- End col-md-8-->   


        </div>
    </div><!-- End container -->
</section><!-- End main_content-->

