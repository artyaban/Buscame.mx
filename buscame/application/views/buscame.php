<section>
<div class="col-md-12">
<div class="col-md-2">
<hr>
<?foreach ($categorias as $key => $value) {

echo '<div>';
echo '<form method="post" action="/index.php/buscame/verCategoria"> ';
echo '<h3> <button name="valor" class="btn btn-link"  value="'.$value->nombre_categoria.'"> '.$value->nombre_categoria.'</button></h3>';
echo '</form>';
echo '</div>';
 }
	
?>
</div><hr>

<div class="col-md-10">
<?

foreach ($establecimientos as $key => $establecimiento) {

?>
<div class="col-md-3">
<div class="panel panel-default">
              <div class="panel-body">
              <img style=" height: 10%;" src="/logos/<?echo $establecimiento->logo;?>" class="img-responsive center-block" >
              </div>
              <div class="panel-footer" class="center-block" style="text-align:center; height: 16%; background-color: #0C4571">
                <h5 class='col-md-12'style='color:#FFF;'><?php echo $establecimiento->nombre_establecimiento; ?> </h5>
             <form action='/index.php/detalles' method='post'> 
            <h3 style='height: 20%; width: 100%;'> <button name='valor' class="btn btn-link" type='submit' value='<?echo $establecimiento->nombre_establecimiento;?>' style="border:solid 0px;  width: 90%; color:#fff !important;"> detalles</h3></button>
             </form>
              </div>
</div></div>
<?
}
?>
</div>

</section>