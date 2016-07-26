<?php 	?><form enctype="multipart/form-data" role="form" class="col-md-8" style="left: 5%;" method="post" action="/index.php/admin/insertar">

<script>
document.getElementById("files").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};</script>

 <div class="form-group col-md-12">
 <label class='col-md-3'>NOMBRE DEL ESTABLECIMIENTO</label><input class='col-md-6'  name='nombre' required>
 </div></br>

 <div class="form-group col-md-12">
<label  class='col-md-3'>DIRECCION DEL ESTABLECIMIENTO</label><input  class='col-md-6' name='direccion' required>
</div></br>
 <div class="form-group col-md-12">
<label   class='col-md-3'>TELEFONO</label><input  class='col-md-6' name='telefono' >
</div></br>
<div class="form-group col-md-12">
<label   class='col-md-3'>WHATSAPP</label><input  class='col-md-6' name='whatsapp' >
</div></br>
</div></br>
<div class="form-group col-md-12">
<label   class='col-md-3'>CELULAR</label><input  class='col-md-6' name='celular' >
</div></br>
</div></br>
<div class="form-group col-md-12">
<label   class='col-md-3'>HORARIOS</label><input  class='col-md-6' name='horarios' >
</div></br>

 <div class="form-group col-md-12">
<label   class='col-md-3'>CODIGO POSTAL </label><input type='number' class='col-md-6' name='cp' required>
</div></br>
 <div class="form-group col-md-12">
<label  class='col-md-3'>SITIO WEB</label><input type='url'  class='col-md-6' name='sitio' required>
</div></br>
 <div class="form-group col-md-12">
<label   class='col-md-3' >DESCRIPCION</label><input   class='col-md-6' name='descripcion' required>
</div></br>
 <div class="form-group col-md-12">
<label   class='col-md-3'>URL MAPS</label><input  class='col-md-6'  name='url' >
</div></br>
 
 <div class="form-group col-md-12">
<label   class='col-md-3'>FACEBOOK</label><input  class='col-md-6'  name='facebook'>
</div></br>
 <div class="form-group col-md-12">
<label  class='col-md-3' >TWITTER</label><input  class='col-md-6'  name='twitter'>
</div></br>
<div class="form-group col-md-12">
<label  class='col-md-3'>LOGO</label><input class='col-md-6'name="uploadedfile" type="file" />
</div></br>

<div class='form-group col-md-12'>
<label  class='col-md-3'>EMAIL</label><input   type='email' class='col-md-6' name='email' required>
</div></br>

<div class='form-group col-md-12'>
<label  class='col-md-3'>CATEGORIA</label> <select name='categoria'class=" col-md-6" id="sel1">
<?
foreach ($categorias as $key => $categoria) {?>
      <option ><?echo $categoria->nombre_categoria;?></option> 
  <?}?>      
      </select>
</div></br>



 
<button style='margin:5%;' type='submit'>Insertar Registro.</button>



	
 </form>