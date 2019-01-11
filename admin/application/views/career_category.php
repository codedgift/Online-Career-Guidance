
<section id="main_content">

    <div class="container">

        <h3>Add Career Category</h3>
        <div class="row">
            

            
            <div class="col-md-9">
                <?= form_open() ?>

                <?= $status ?>
                
                <div class="post">

                    
                    <div class="form-group">
                        
                        <input type="text" name="txtTopic" class="form-control" placeholder="Type your new category name" required="">
                        
                    </div>
                    
                    <div class="form-group">
                        
                        
                        <input type="submit" value="Add New Category" class="btn btn-primary"/>
                    </div>


                </div>
                
                <?= form_close() ?>
                
                <h4>Categories</h4>
                
								<?= form_open("pages/career_edit/".$token.""); ?>
                <table class="table table-striped">
                
                            <?php 
                                foreach ($categories as $cat) {
                                    $s++;
                                    if($token == $cat->id)
                                    {
                                         echo '<tr>
                                <td>'.$s.'</td>
                                <td><input type="text" name="txtTopic'.$cat->id.'" class="form-control" value="'.$cat->category_name.'"> </td> '
                                            . '<td colspan="2"><input type="submit" value="Save" style="width:100%" class="btn btn-primary"/></td>
                            </tr>';
                                    }else{
                                         echo '<tr>
                                <td>'.$s.'</td>
                                            <td>'.$cat->category_name.' </td> '
                                                        . '<td><a href="'.base_url().'pages/career_category/career_edit/'.$cat->id.'">Edit</a> </td><td> <a href="#" onclick="del_career('.$cat->id.')">Delete</a></td>
                                        </tr>';
                                    }
                                    
                                   
                                }
                            ?>
                            
                </table>
                <?= form_close() ?>


                <hr>

            </div><!-- End col-md-8-->   


        </div>
    </div><!-- End container -->
</section><!-- End main_content-->

