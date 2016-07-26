


<div style='background-color: #fff;font-family: "Indie Flower", cursive;'>
<?php foreach ($query as $key => $empresa) {?>
<div class='col-md-12'>
<h1 style='text-align: center; color: #092753; font-family: "Indie Flower", cursive;'><?echo $empresa->nombre_establecimiento; ?>
<br><img style="border:solid #2C367B 3px; height: 20%;" src="/logos/<?echo $empresa->logo;?>" class="img-responsive center-block" >
</h1>
</div>

<div class='col-md-12'><h1 style='text-align: center; color: #092753;'>


<div class='col-md-6'>
<hr><h4 style='color: #092753;'>direccion :  <?echo $empresa->direccion; ?></h4><hr>
<hr><h4 style='color: #092753;'>telefono :  <?echo $empresa->telefono; ?></h4><hr>
<hr><h4 style='color: #092753;'>Whatsapp :  <?echo $empresa->whatsapp; ?></h4><hr>
<hr><h4 style='color: #092753;'>Celular :  <?echo $empresa->celular; ?></h4><hr>

<h4 style='color: #092753;'>Codigo Postal :  <?echo $empresa->codigo_postal; ?></h4>
<hr><h4 style='color: #092753;'>Sitio Web : <a href = <?=$empresa->sitio_web;?> target="_blank"><?echo $empresa->sitio_web;?></a></h4><hr>
<h4 style='color: #092753;'>Email :  <?echo $empresa->e_mail; ?></h4>
<hr><h5>Descripcion :  <?echo $empresa->descripcion; ?></h5><hr>
<a href = <?=$empresa->facebook;?> target="_blank">  <img src="/logos/facebook.png" style='height: 70px;'>  </a>
<? echo $empresa->nombre_establecimiento;?>

<? if($empresa->twitter=='')
{

}else
{?>
<a href = <?=$empresa->twitter;?> target="_blank">  <img src="/logos/twitter.png" style='height: 70px;'>  </a><?}?>
</div>

<div class='col-md-6'>
<h4>Localizacion :<br><div class='col-md-6'> <? echo $empresa->url_maps;?></div></h4>
<hr><h4 style='color: #092753;'>horarios :  <?echo $empresa->horarios; ?></h4><hr>
</div>
<?}?>
<hr>

