
<section id="main_content">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h4>Change Logo</h4>

                <div class="tab-content">
                    <?php echo form_open_multipart('') ?>

                    <div class="row">
                        <aside class="col-md-4">
                            <div class=" box_style_1 profile">
                                <p class="text-center">
                                    <?php if (file_exists("../assets/logo/" . $det["logo"] . "") == FALSE || $det["logo"] == null) { ?>
                                    <strong>No Image Uploaded. Theme default image is in use.</strong>
                                <?php } else { ?>

                                    <img src="<?php echo base_url()."../assets/logo/" . $det["logo"] . ""; ?>" alt="<?php echo $det['business_name'] ?>" class="img-thumbnail styled" />
                                <?php } ?>
                                </p>
                            </div><!-- End box-sidebar -->
                        </aside><!-- End aside -->

                        <div class="col-md-8">
                            <h4><?php echo validation_errors(); ?></h4>
                                <h4><?php echo $status ?></h4>
                                <h5>Note: Please ensure the image has a minimum width of 200px and minimum height of 100px</h5>
                            <table class="table" id="tableSky">

                                <tr style="background-color: white;">
                                    <td>Select Image</td>
                                    <td>
                                        <input type="file" name="userfile" id="userfile" class="form-control" required="" />

                                    </td>
                                </tr>


                                </tbody>
                            </table>
                            <div class="row" style="text-align: center">
                                <input type="submit" name="btnSub" value="Submit" id="complete1" />
                            </div>
                        </div>


                    </div>


                    <!-- end step-->


                    <?php echo form_close() ?>

                </div><!-- end Survey container -->

            </div>   
        </div><!-- End row-->   
    </div><!-- End container -->
</section><!-- End main_content-->

