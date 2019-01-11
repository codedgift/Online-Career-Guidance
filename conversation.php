<?php 
ob_start();
$page = "conversation";
$active = "conversation";

	include("include/header2.php");	 
	
	//include("include/career_val.php");	
	
	//$get = $_REQUEST['id'];
	//$get_cat = $_GET['category'];


?>

	<script type="text/javascript" src="ajax/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			displayMsg();
			
			$("#reply").click(function(){
				var content = $("#content").val();

				if(content == ''){
					alert("Enter Some Text..");
					$("#content").focus();
				}else{
					$("#flash").show();
					$("#flash").fadeIn(400).html('<img src="assets/images/load.gif" style="width: 50px; height: 50px;">');
					
					$.ajax({
						url: 'action.php?id=<?= $_REQUEST['id'];?>',
						type: "POST",
						cache: true,
						data: {
							"done": 1,
							"textcontent": content
						},
						success: function(html){
							displayMsg();
							$("#show").after(html);
							$("#content").val('');
							$("#flash").hide();
							$("#content").focus();
						}
					});

				}
				return false;
			});

			function displayMsg(){
				$.ajax({
					url: "action.php?id=<?= $_REQUEST['id'];?>",
					type: "POST",
					cache: true,
					data: {
						"display": 1
					},
					success: function(d){
						$("#show").html(d);
					}
				});
			}

		});
	</script>

    	<section class="job-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-7 co-xs-12 text-left">
					<h3><?= $dashboard['page_title']?></h3>
				</div>
				<div class="col-md-6 col-sm-5 co-xs-12 text-right">
					<div class="bread">
						<ol class="breadcrumb">
							<li class="active">You Are Logged in</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
        </section>
		
        <section class="dashboard-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                       <?php 
					
							// Including Navigation side bar
							include("include/aside.php");
						
						?>
                        <div class="col-md-8 col-sm-8 col-xs-12">

                         <form method="POST" name="form" action="">
					 
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<textarea cols="6" rows="8" style="font-weight: bold;" id="content" name="content" placeholder="Type Your Reply Message Here" class="form-control" ></textarea>
								</div>
							</div>
							
							<div class="col-md-12 col-sm-12">
								<button class="btn btn-success pull-right" id="reply" type="button" > Reply <i class="fa fa-mail-reply"></i></button> 
								<div id="flash" align="left"></div>
							</div>
                                        
						</form>
							
							
							
                            <div class="heading-inner first-heading">
                                <p class="title">My Conversations</p>
                            </div>
                            <div class="resume-list">
                                <div class="table-responsive" style="overflow: scroll; height: 700px;">
                                    <table class="table table-inverse" >
                                       <!-- <thead class="thead-inverse">
                                            <tr>
                                                <th>S/N</th>
                                                <th>Message Category</th>
                                                <th>Conversations</th>
                                                <th>Date</th>
                                            </tr> 
                                        </thead> -->
                                        <tbody id="show">
								
                                            
                                        </tbody>
                                    </table>
                                </div>
								
									
								
								
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

		
	<div style="margin-top: 8%;">
	 <?php include("include/footer.php"); ?>
	</div>

