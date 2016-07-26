<section>

<?

$array=array('Categoria1'=>$categoria1,'Categoria2'=>$categoria2,'Categoria3'=>$categoria3,'Categoria4'=>$categoria4);
?>




<div class="col-md-12">

<div class="col-md-2">

	<hr>
<?foreach ($array as $key => $value) {

echo '<div style="border: solid #ddd 1px;background-color: #f5f5f5">';
echo '<a style="font-size:small" href="'.$value.'"> '.$value.'<a>';
echo '</div>';

	}
?>
</div><hr>


<?
$j=0;
while($j<=3)
{
?>
<div class="col-md-10">
<div class="row">
<?
$i=0;while($i<=3)
{

?>

<div class="col-md-3">
<div class="panel panel-default">
<div class="panel-body">     <img src="../../buscame/logos/nissan.jpg" class="img-responsive center-block" >  </div>
  <div class="panel-footer" class="center-block" style="text-align:center;">
Oferta<br> Texto <br> Texto  </div> </div></div>
<?
$i=$i+1;

}$j=$j+1;
$i=0;    ?></div></div><div class="col-md-2"></div><?}  
?>


</section>