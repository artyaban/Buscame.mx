<?php
?>
<script>
function seguro(valor){
if(confirm('Eliminar empresa  '+valor)) {
document.getElementById("boton").click();}

//document.formulario.submit(valor);}
}
</script>

<table class='table-bordered table-hover table-condensed'>

 <thead>
      <tr>
        <th>Empresa</th>
         <th>Direccion</th>
          <th>Codigo Postal</th>
          <th>Sitio Web</th>
          <th>email</th>
          <th>Eliminar</th>
           
       
      </tr>
    </thead>
<?$i=1;?>

<?foreach ($query as $row){?>

	<?if($i==1){ ?>	<form method='post'  id='formulario' action='/index.php/admin/bajas'> <tr class='active info'> 
	
	<td > <? echo $row->nombre_establecimiento;?></td>
	<td > <? echo $row->direccion;?></td>
	<td > <? echo $row->codigo_postal;?></td>
	<td > <? echo $row->sitio_web;?></td>
	<td > <? echo $row->e_mail;?></td>

	<input value='<?echo $row->id_establecimiento; ?>'  name='id'id='id'hidden>
	<td><button type='submit' value='<?echo $row->id_establecimiento; ?>' >BAJA</button>
	<button type='submit' id='boton' value='<?echo $row->id_establecimiento; ?>'  hidden>BAJA</button>
	</td>

	</tr></form><?$i=$i+1;continue;}
	
	if($i==2){ ?><form method='post'  id='formulario' action='/index.php/admin/bajas'>	 <tr class='active success'> 	
	<form method='post'  id='formulario' action='/index.php/admin/bajas'>
	<td > <? echo $row->nombre_establecimiento;?></td>
	<td > <? echo $row->direccion;?></td>
	<td > <? echo $row->codigo_postal;?></td>
	<td > <? echo $row->sitio_web;?></td>
	<td > <? echo $row->e_mail;?></td>

	<input value='<?echo $row->id_establecimiento; ?>'  name='id'id='id'hidden>
	<td><button type='submit'  value='<?echo $row->id_establecimiento; ?>' >BAJA</button>
	<button type='submit' id='boton' value='<?echo $row->id_establecimiento; ?>'  hidden>BAJA</button>
	</td>

	</tr></form><?$i=$i+1;continue;}
	




	if($i==3){ ?> 
	<form method='post'  id='formulario' action='/index.php/admin/bajas'>	<tr class='active danger'>	
	
	<td > <? echo $row->nombre_establecimiento;?></td>
	<td > <? echo $row->direccion;?></td>
	<td > <? echo $row->codigo_postal;?></td>
	<td > <? echo $row->sitio_web;?></td>
	<td > <? echo $row->e_mail;?></td>

	<input value='<?echo $row->id_establecimiento; ?>'  name='id'id='id'hidden>
	<td><button type='submit'  value='<?echo $row->id_establecimiento; ?>' >BAJA</button>
	<button type='submit' id='boton' value='<?echo $row->id_establecimiento; ?>'  hidden>BAJA</button>
	</td>


	</tr></form> <? $i=1;continue;}?><?}?>


</table>