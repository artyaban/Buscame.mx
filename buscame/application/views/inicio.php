
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
<?php 

//tomar las variables para los cuadros de empresa.
$empresa1= 'WebappMX';
$empresa2= 'fedex';
$empresa3= 'nissan';
$empresa4= 'exell';
$empresa5= 'nike';
$empresa6= 'hp';
$empresa7= 'coca_cola';
$empresa8= 'burger_king';
$oferta1='WebappMX';
$oferta2='WebappMX';
$oferta3='WebappMX';
$oferta4='WebappMX';
$oferta5='WebappMX';
$oferta6='WebappMX';
?>


<div class='col-xs-2'>
<? $i=1; while($i<=3)
{
$empresa='empresa'.$i; 
?>


<div class="panel panel-default">
              <div class="panel-body">
                <img style=" height: 10%;" src="http://localhost/Buscame.mx/imagenes/<?echo $$empresa;?>.jpg" class="img-responsive center-block" >
              </div>
              <div class="panel-footer" class="center-block" style="text-align:center; background-color: #">
                <h4> <?php echo $$empresa; ?> </h4>
             
              
                 <a href='http://localhost/Buscame.mx/buscame/controllers/<?echo $$empresa;?>.php' method='post'><?php 
              echo 'ver detalles de '.$$empresa; ?> &nbsp;&nbsp;</a>
              </div>
</div>
<? $i++;}?></div>




<div class='col-xs-8'>

	
				<div id="myCarousel" class="carousel slide" data-ride="carousel" style="background-color: #fff;">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li> 
				  </ol>

				  <!-- Wrapper for slides -->
				  <!-- Hacer uso de imagenes de 640px x 480px de lo contraio con aproximadamente altura de 480px-->
				  <div class="carousel-inner" role="listbox">
					

					<div class="item active">
					  <center><img style='height:29%;'src="http://localhost/Buscame.mx/imagenes/<?echo $empresa1;?>.jpg" alt="Búscame.mx" class="img-responsive"></center>
					</div>

					<div class="item">
					  <center><img style='height:29%;'src="http://localhost/Buscame.mx/imagenes/<?echo $empresa2;?>.jpg" alt="Búscame.mx" class="img-responsive"></center>

					</div>

					<div class="item">
					  <center><img style='height:29%;'src="http://localhost/Buscame.mx/imagenes/<?echo $empresa3;?>.jpg"alt="Búscame.mx" class="img-responsive"></center>
					 
					</div>

					
				</div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>


				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				
				
			</div>

<p>&nbsp;</p>

<? //ofertas.......
$j=1; while($j<=6)
{
$empresa='oferta'.$j; 
?>
<div class='col-xs-4'>

<div class="panel panel-default">
              <div class="panel-body">
                <img style=" height: 10%;" src="http://localhost/Buscame.mx/imagenes/<?echo $$empresa;?>.jpg" class="img-responsive center-block" >
              </div>
              <div class="panel-footer" class="center-block" style="text-align:center; background-color: #">
                <h4> <?php echo 'OFERTA !!' ?> </h4>
             
              
                 <a href='http://localhost/Buscame.mx/buscame/controllers/<?echo $$empresa;?>.php' method='post'><?php 
              echo 'Ver detalles '.$$empresa; ?> &nbsp;&nbsp;</a>
              </div>
</div></div>
<? $j++;
}?>

</div>
<div class='col-xs-2'>
	
	<? $i=4; while($i<=6)
{
$empresa='empresa'.$i; 
?>


<div class="panel panel-default">
              <div class="panel-body">
                <img style=" height: 10%;" src="http://localhost/Buscame.mx/imagenes/<?echo $$empresa;?>.jpg" class="img-responsive center-block" >
              </div>

              <div class="panel-footer" class="center-block" style="text-align:center;">
                <h4> <?php echo $$empresa; ?> </h4>
             
              
                 <a href='http://localhost/Buscame.mx/buscame/controllers/<?echo $$empresa;?>.php' method='post'><?php 
              echo 'ver detalles de '.$$empresa; ?> &nbsp;&nbsp;&nbsp;</a>
              </div>
</div>
<? $i++;}?>
</div>

