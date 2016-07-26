<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
<title>BUSCAME MX</title>
<meta charset="utf-8" />	

<link rel="stylesheet" href="<?echo base_url();?>assets/css/main.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<script src="<?echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?echo base_url();?>assets/js/skel.min.js"></script>
<script src="<?echo base_url();?>assets/js/util.js"></script>
<script src="<?echo base_url();?>assets/js/main.js"></script>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>


<body style='background-color:#fff' style='margin: 0px auto;'>	

<center>
<ul  class="list-inline col-md-12" style='margin:auto; color: #0C4571;width:100%;font-family:inherit;background-color: #fff;'><hr>

<li><a style='color: #0C4571;'href="<?echo base_url();?>">INICIO</a></li>
<li><a style='color:#0C4571; 'href="<?echo base_url(); ?>index.php/buscame">BUSCAME</a></li>
<li><a style='color:#0C4571; 'href="<?echo base_url(); ?>index.php/feria">VAMONOS DE FERIA...</a></li>
<li><a style='color:#0C4571; 'href="<?echo base_url(); ?>index.php/nosotros">NOSOTROS</a></li>
<li><a style='color:#0C4571; 'href="<?echo base_url(); ?>index.php/contactanos">CONTACTANOS</a></li>

<li class="search"style='color:#FFFFFF; '>
<form  style='color:#000; ' method="post" action="<?echo base_url(); ?>index.php/buscame/busqueda">
<input type="text" placeholder="BUSCAR" style='color:#000;' name='search'id="search" />
</form>
</li>								
</ul>
</center>

<div class='col-md-12' style='background-color: #fff;'>
						
<center><img  class="img-responsive" src="/logos/banner.jpg" style='height: 10%;width: 100%;background-color: #fff;'></center>
<hr>
</div>
