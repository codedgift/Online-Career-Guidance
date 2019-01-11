<html lang="en">

<head>
  	<meta charset="utf-8">
    <title><?= $title ?> | <?= $_SERVER['SERVER_NAME']; ?></title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
    
    <!-- REVOLUTION BANNER CSS SETTINGS -->
	<link href="<?php echo base_url(); ?>assets/rs-plugin/css/settings.css" media="screen" rel="stylesheet">
    
    <!-- CSS -->
    <link href="<?php echo base_url(); ?>assets/font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/superfish.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/sky.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/fontello/css/fontello.css" rel="stylesheet">
    <!-- color scheme css -->
    <link href="<?php echo base_url(); ?>assets/css/color_scheme.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/ui/trumbowyg.min.css">
    
    
    <link href="//cdnjs.cloudflare.com/ajax/libs/octicons/3.5.0/octicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        
    <link href='<?php echo base_url(); ?>assets/css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo base_url(); ?>assets/css/fullcalendar.print.css' rel='stylesheet' media='print'>
    
    <!-- Toggle Switch -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.switch.css">
    <link href="<?php echo base_url(); ?>assets/check_radio/skins/square/aero.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/base/jquery.ui.all.css">
    
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.8.12.min.js"></script>
<script src='<?php echo base_url(); ?>assets/js/custom.js'></script>

       
    <!--[if lt IE 9]>
      <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
.bs-example{
	font-family: sans-serif;
	position: relative;
	margin: 100px;
}
.typeahead, .tt-query, .tt-hint {
	border: 2px solid #CCCCCC;
	border-radius: 8px;
	font-size: 24px;
	height: 30px;
	line-height: 30px;
	outline: medium none;
	padding: 8px 12px;
	width: 396px;
}
.typeahead {
	background-color: #FFFFFF;
}
.typeahead:focus {
	border: 2px solid #0097CF;
}
.tt-query {
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
}
.tt-hint {
	color: #999999;
}
.tt-dropdown-menu {
	background-color: #FFFFFF;
	border: 1px solid rgba(0, 0, 0, 0.2);
	border-radius: 8px;
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
	margin-top: 12px;
	padding: 8px 0;
	width: 422px;
}
.tt-suggestion {
	font-size: 24px;
	line-height: 24px;
	padding: 3px 20px;
        text-align: left;
        color: black;
}
.tt-suggestion.tt-is-under-cursor {
	background-color: #0097CF;
	color: #FFFFFF;
}
.tt-suggestion p {
	margin: 0;
}
</style>
  </head>
  
  <body>
  <header>
  	<div class="container">
	<div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12" style="font-size: x-large; font-weight: bolder">
                    My Admin
		</div>
	</div>
</div>
</header><!-- End header -->

<nav>
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div id="mobnav-btn"></div>
			<ul class="sf-menu">
				<li><a href="<?php echo base_url(); ?>users/dashboard">Dashboard</a></li>
                              <!--  <li class="normal_drop_down">
				<a href="#">Edit Pages</a>
				<div class="mobnav-subarrow"></div>
				<ul>
                	<li><a href="<?php echo base_url(); ?>pages/edit/home">Homepage</a></li>
                    <li><a href="<?php echo base_url(); ?>pages/edit/about">About</a></li>
				</ul>
				</li>
				<li><a href="<?php echo base_url(); ?>pages/services">Edit Services</a></li>
                                <li><a href="<?= base_url(); ?>" target="_new">Main Site</a></li>
			-->
			</ul>
            
            <div class="col-md-2 pull-right hidden-sm hidden-xs">
                <ul class="sf-menu">
                    <li><a href="<?php echo base_url(); ?>users/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
              </div>
              
		</div>
	</div><!-- End row -->
</div><!-- End container -->
</nav>