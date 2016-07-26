
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
 <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
 </style>



<div class='col-md-2' >
<?php foreach ($query as $key => $empresa) {?>




<div class="panel panel-default">
              <div class="panel-body">
              <img style=" height: 10%;" src="/logos/<?echo $empresa->logo;?>" class="img-responsive center-block" >
              </div>
              <div class="panel-footer" class="center-block" style="text-align:center; height: 16%; background-color: #0C4571">
                <h5 class='col-md-12'style='color:#FFF;'><?php echo $empresa->nombre_establecimiento; ?> </h5>
             <form action='index.php/detalles' method='post'> 
            <h3 style='height: 20%; width: 100%;'> <button name='valor' class="btn btn-link" type='submit' value='<?echo $empresa->nombre_establecimiento;?>' style="border:solid 0px;  width: 90%; color:#fff !important;"> detalles</h3></button>
             </form>
              </div>
</div>


<?php }?>
</div>
<div class='col-md-8'>

	
				<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%; ">
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
					  <center><img style='height:29%;width: 100%;'src="/logos/banner1.jpg" alt="Búscame.mx" class="img-responsive"></center>
					</div>

					<div class="item">
					  <center><img style='height:29%;width: 100%;'src="/logos/banner2.jpg" alt="Búscame.mx" class="img-responsive"></center>

					</div>

					<div class="item">
					  <center><img style='height:29%;width: 100%;'src="/logos/banner3.jpg"alt="Búscame.mx" class="img-responsive"></center>
					 
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

<br>


<div class='col-md-4'>

<?php foreach ($query2 as $key => $empresa) {?>





<div class="panel panel-default">
              <div class="panel-body">
              <img style=" height: 10%;" src="/logos/<?echo $empresa->logo;?>" class="img-responsive center-block" >
              </div>
              <div class="panel-footer" class="center-block" style="text-align:center; height: 16%; background-color: #0C4571">
                <h5 class='col-md-12'style='color:#FFF;'><?php echo $empresa->nombre_establecimiento; ?> </h5>
             <form action='index.php/detalles' method='post'> 
            <h4 style='height: 20%; width: 100%;'> <button  name='valor' class="btn btn-link" type='submit' value='<?echo $empresa->nombre_establecimiento;?>' style="border:solid 0px; color:#fff !important; "> detalles</h4></button>
             </form>
              </div>
</div>
<?php }?>
</div>





<div class='col-md-4'>

<?php foreach ($query2 as $key => $empresa) {?>





<div class="panel panel-default">
              <div class="panel-body">
              <img style=" height: 10%;" src="/logos/<?echo $empresa->logo;?>" class="img-responsive center-block" >
              </div>
              <div class="panel-footer" class="center-block" style="text-align:center; height: 16%; background-color: #0C4571">
                <h5 class='col-md-12'style='color:#FFF;'><?php echo $empresa->nombre_establecimiento; ?> </h5>
             <form action='index.php/detalles' method='post'> 
            <h4 style='height: 20%; width: 100%;'> <button  name='valor'class="btn btn-link" type='submit' value='<?echo $empresa->nombre_establecimiento;?>' style="border:solid 0px; color:#fff !important; "> detalles</h4></button>
             </form>
              </div>
</div>
<?php }?>
</div>
<div class='col-md-4'>

	
<?php foreach ($query2 as $key => $empresa) {?>


<div class="panel panel-default">
              <div class="panel-body">
              <img style=" height: 10%;" src="/logos/<?echo $empresa->logo;?>" class="img-responsive center-block" >
              </div>
              <div class="panel-footer" class="center-block" style="text-align:center; height: 16%; background-color:#0C4571">
                <h5 class='col-md-12'style='color:#FFF;'><?php echo $empresa->nombre_establecimiento; ?> </h5>
             <form action='index.php/detalles' method='post'> 
            <h4 style='height: 20%; width: 100%;'> <button name='valor' class="btn btn-link" type='submit' value='<?echo $empresa->nombre_establecimiento;?>' style="border:solid 0px;  color:#fff !important;"> detalles</h4></button>
             </form>
              </div>
</div>

<?}?>
</div>


</div>
</div>




<div class='col-md-2' >
<?php foreach ($query3 as $key => $empresa) {?>





<div class="panel panel-default">
              <div class="panel-body">
              <img style=" height: 10%;" src="/logos/<?echo $empresa->logo;?>" class="img-responsive center-block" >
              </div>
              <div class="panel-footer" class="center-block" style="text-align:center; height: 16%; background-color: #0C4571">
                <h5 class='col-md-12'style='color:#FFF;'><?php echo $empresa->nombre_establecimiento; ?> </h5>
             <form action='index.php/detalles' method='post'> 
            <h4 style='height: 20%; width: 100%;'> <button name='valor' class="btn btn-link" type='submit' value='<?echo $empresa->nombre_establecimiento;?>' style="border:solid 0px; color:#fff !important; "> detalles</h4></button>
             </form>
              </div>
</div>

<?php }?>
</div>