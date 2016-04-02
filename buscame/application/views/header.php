<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>

<head>
		<title>BUSCAME MX</title>
		<meta charset="utf-8" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?echo base_url();?>assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->


						<!-- Scripts -->
						<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
			<script src="<?echo base_url();?>assets/jquery.min.js"></script>
			<script src="<?echo base_url();?>assets/js/skel.min.js"></script>
			<script src="<?echo base_url();?>assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">
					
				<!-- Header -->
					<header id="header">
						<h3><a style='font-size: 70%; margin:20px;'href="#">Buscame MX</a></h3>
						<nav class="links">
							<ul>
								<li><a style='font-size: 16px;' href="<?echo base_url();?>">INICIO</a></li>
								<li><a style='font-size: 16px;'href="<?echo base_url(); ?>index.php/nosotros">NOSOTROS</a></li>
								<li><a style='font-size: 16px;'href="<?echo base_url(); ?>index.php/buscame">BUSCAME</a></li>
								<li><a style='font-size: 16px;'href="<?echo base_url(); ?>index.php/feria">VAMONOS DE FERIA...</a></li>
								<li><a style='font-size: 16px;'href="<?echo base_url(); ?>index.php/contactanos">CONTACTANOS</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">BUSCAR</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>
</div>


