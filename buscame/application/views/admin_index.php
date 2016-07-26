<?php
?>
<table class='table-bordered table-hover table-condensed'>
<form method='post' action='/index.php/admin/ver'>
 <thead>
      <tr>
        <th>Empresa</th>
         <th>Direccion</th>
          <th>Codigo Postal</th>
          <th>Sitio Web</th>
          <th>email</th>
          <th>Status</th>
            <th>VER MAS INFORMACION</th>
       
      </tr>
    </thead>
<?$i=1;
foreach ($query as $row){
	
	if($i==1){ ?> <tr class='active info'> 
	<td > <? echo $row->nombre_establecimiento;?></td>
	<td > <? echo $row->direccion;?></td>
	<td > <? echo $row->codigo_postal;?></td>
	<td > <? echo $row->sitio_web;?></td>
	<td > <? echo $row->e_mail;?></td>
	<td><?if($row->status==1)
	{echo 'Disponible';}
	if($row->status==2)
	{echo'Eliminado';}
	if($row->status!=1 and $row->status!=2)
	{

		echo 'No Disponible';
	}

	?></td>
	<td><button value='<?echo $row->id_establecimiento; ?>' name='boton' >Ver mas.</button></td>

	</tr><?$i=$i+1;continue;}
	
	if($i==2){ ?> <tr class='active success'> 
	<td > <? echo $row->nombre_establecimiento;?></td>
	<td > <? echo $row->direccion;?></td>
	<td > <? echo $row->codigo_postal;?></td>
	<td > <? echo $row->sitio_web;?></td>
	<td > <? echo $row->e_mail;?></td>
	<td><?if($row->status==1)
	{echo 'Disponible';}
	if($row->status==2)
	{echo'Eliminado';}
	if($row->status!=1 and $row->status!=2)
	{

		echo 'No Disponible';
	}

	?></td>
	<td><button value='<?echo $row->id_establecimiento; ?>' name='boton' >Ver mas.</button></td>

	</tr><?$i=$i+1;continue;}
	




	if($i==3){ ?> <tr class='active danger'>
	<td > <? echo $row->nombre_establecimiento;?></td>
	<td > <? echo $row->direccion;?></td>
	<td > <? echo $row->codigo_postal;?></td>
	<td > <? echo $row->sitio_web;?></td>
	<td > <? echo $row->e_mail;?></td>
	<td><?if($row->status==1)
	{echo 'Disponible';}
	if($row->status==2)
	{echo'Eliminado';}
	if($row->status!=1 and $row->status!=2)
	{

		echo 'No Disponible';
	}

	?></td>
	<td><button value='<?echo $row->id_establecimiento; ?>' name='boton' >Ver mas.</button></td>




	</tr><? $i=1;continue;}}?>


</table>