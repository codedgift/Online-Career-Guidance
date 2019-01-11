<?php 
ob_start();
$page = "inbox";
$active = "inbox";


	include("include/counsel_val.php");
	include("include/header3.php");

	
	if(!(isset($_SESSION['login_counsellor']))){
			header("Location: counsellor_login.php");
	}
	

?>
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
					include("include/aside2.php");
				
				?>
				<div class="col-md-8 col-sm-8 col-xs-12">
					<div class="heading-inner first-heading">
						<p class="title">My Messages</p>
					</div>
					<div class="resume-list">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead class="thead-inverse">
									<tr>
										<th>S/N</th>
										<th>Message Category</th>
										<th>Conversations</th>
										<th>Date</th>
									</tr>
								</thead>
								<tbody>
								
								<?php 
								
								$sql = main_query("SELECT * FROM inbox WHERE cat_id='".$counsellor_id."'");
								
									while($row_msg = $sql->fetch_assoc()){
										$id = $row_msg['id'];
										$catty = $row_msg['category'];
										$msg = $row_msg['messages'];
										$time = $row_msg['time2'];
										@$i++;
										
										echo "<tr>
												<th scope='row'>$i</th>
												<td><h5>$catty</h5></td>
												<td><a class='btn btn-primary' href='con_conversation.php?id=$id'> View Conversation </a></td>
												<td><h5>$time</h5></td>
											</tr>";
										
									}
									
								
								?>
									
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