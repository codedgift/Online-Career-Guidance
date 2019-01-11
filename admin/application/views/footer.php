
<footer>


    <div id="copy_right">Powered by <a href="#" ta>Online Career Guidance System</a> © <?php echo date("Y") ?></div>
</footer>

<div id="toTop">Back to top</div>



<!-- JQUERY -->
<!-- jQuery REVOLUTION Slider  -->


<!-- OTHER JS --> 

<style>
    .twitter-typeahead
    {
        position: initial !important;
        display: initial !important;
    }
    .typeahead{
        background-color: white !important;
    }
</style>


<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url(); ?>assets/check_radio/jquery.icheck.js"></script>

<script src="<?php echo base_url(); ?>assets/js/superfish.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/retina.min.js"></script>
<script src="<?php echo base_url(); ?>assets/validate.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.placeholder.js"></script>
<script src="<?php echo base_url(); ?>assets/js/functions.js"></script>
<script src="<?php echo base_url(); ?>assets/js/classie.js"></script>
<!--<script src="<?php echo base_url(); ?>assets/js/uisearch.js"></script>-->
<script src="<?php echo base_url(); ?>assets/js/typeahead.js"></script>


<script src='<?php echo base_url(); ?>assets/js/moment.min.js'></script>
<script src='<?php echo base_url(); ?>assets/js/jquery-ui.custom.min.js'></script>
<script src='<?php echo base_url(); ?>assets/js/fullcalendar.min.js'></script>
<script src='<?php echo base_url(); ?>assets/js/fullcalendar_func.js'></script>



<!--<script>new UISearch( document.getElementById( 'sb-search' ) );</script>-->

        <script src="<?php echo base_url(); ?>assets/js/ui/jquery.ui.core.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/ui/jquery.ui.datepicker.js"></script>
        <script src="<?php echo base_url(); ?>assets/dist/trumbowyg.min.js"></script>
        
        
    <script src="<?php echo base_url(); ?>assets/dist/js/bootstrap-colorpicker.js"></script>

<script>
            $(function() {
                $("#datepicker").datepicker();
            });

            $(function() {
                $("#datepicker2").datepicker();
            });
            
            $(document).ready(function() {
        $('#editor1').trumbowyg();
        $('#editor2').trumbowyg();
        
    });
        </script>
        
<script type="text/javascript" src="<?php echo base_url(); ?>assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript">



		var revapi;

		$(document).ready(function() {
                    revapi = jQuery('.tp-banner').revolution(
				{
					delay:9000,
					startwidth:1700,
					startheight:600,
					hideThumbs:true,
					navigationType:"none",
					fullWidth:"on",
					forceFullWidth:"on"
				});

		});	//ready

	</script>

  </body>
</html>