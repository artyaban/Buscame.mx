<?php 	?><form role="form" class="col-md-8" style="left: 5%;" method="post" action="/index.php/admin/actualizar">
<?foreach ($query as $key => $value) {?>

<input value="<?echo $value->id_establecimiento;?>" name='id' hidden>

 <div class="form-group">
 <label class='col-md-4'>NOMBRE DEL ESTABLECIMIENTO</label><input class='col-md-4' value="<?echo $value->nombre_establecimiento;?>" name='nombre'>
 </div></br>
 <div class="form-group">
<label  class='col-md-4'>DIRECCION DEL ESTABLECIMIENTO</label><input  class='col-md-4' value="<?echo $value->direccion?>"name='direccion'>
</div></br>
<div class="form-group">
<label  class='col-md-4'>TELEFONO</label><input  class='col-md-4' value="<?echo $value->telefono?>"name='telefono'>
</div></br>
<div class="form-group">
<label  class='col-md-4'>WHATSAPP</label><input  class='col-md-4' value="<?echo $value->whatsapp?>"name='whatsapp'>
</div></br>
<div class="form-group">
<label  class='col-md-4'>CELULAR</label><input  class='col-md-4' value="<?echo $value->celular?>"name='celular'>
</div></br>
<div class="form-group">
<label  class='col-md-4'>HORARIO</label><input  class='col-md-4' value="<?echo $value->horarios?>"name='horarios'>
</div></br>

 <div class="form-group">
<label  class='col-md-4'>CODIGO POSTAL </label><input  class='col-md-4' value="<?echo $value->codigo_postal;?>"name='cp'>
</div></br>
 <div class="form-group">
<label  class='col-md-4'>SITIO WEB</label><input  class='col-md-4' value="<?echo $value->sitio_web;?>"name='sitio'>
</div></br>
 <div class="form-group">
<label  class='col-md-4' >EMAIL</label><input  class='col-md-4' value="<?echo $value->e_mail;?>"name='email'>
</div></br>
 <div class="form-group">
<label  class='col-md-4' >DESCRIPCION</label><input   class='col-md-4' value="<?echo $value->descripcion;?>" name='descripcion'>
</div></br>
 <div class="form-group">
<label  class='col-md-4'>URL MAPS</label><input class='col-md-12' value='<?echo $value->url_maps;?>' name='url'>
</div></br></br></br>
 <div class="form-group">
<label  class='col-md-4'>LOGO</label><input   class='col-md-4' value="<?echo $value->logo;?>"name='logo'>
</div></br>
 <div class="form-group">
<label  class='col-md-4' >FACEBOOK</label><input  class='col-md-4' value="<?echo $value->facebook;?>"name='facebook'>
</div></br>
 <div class="form-group">
<label  class='col-md-4' >TWITTER</label><input  class='col-md-4' value="<?echo $value->twitter;?>"name='twitter'>
</div></br>
  <div class="form-group">
<label  class='col-md-4' >STATUS</label><input  class='col-md-4' value="<?echo $value->status;?>"name='status'>
</div></br>
 <div class="form-group">
<label  class='col-md-4' >PUNTOS</label><input  class='col-md-4' value="<?echo $value->puntos;?>"name='puntos'>
</div></br>
<button style='margin:5%;' type='submit'>Actualizar Datos.</button>



	
<?}?>  </form>