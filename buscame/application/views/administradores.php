<?php ?>
<div class='col-xs-12'>
<h3 align='center'>Administradores del sistema.</h3> <br>
<div class="table-responsive">
  <table class="table">
<thead>
	<th>Usuario</th>
	<th>Password</th>
	<th>modificar</th>
</thead>
</tbody>
<?
foreach ($query as $key => $admin) {
?>
<tr>
<form method="post" action="/index.php/admin/updateAdmin">
<input type="hidden" value='<?echo $admin->id_admin;?>' name='id' hidden>
<td><input type='text' value='<?echo $admin->usuario;?>' name='usuario'></td>
<td><input type='password' value='<?echo $admin->password;?>' name='pass'></td>
<td><button type='submit' style='height: 100%;'>modificar</button></td>
</form></tr>
<?
}
?>
</tbody>
</table>

<table class="table">
<thead>
	<th>Usuario</th>
	<th>Password</th>
	<th>Agregar Administrador</th>
</thead>
<tbody>
<form method="post" action="/index.php/admin/agregarAdmin">
<td><input type='text'  name='usuario'></td>
<td><input type='password'  name='pass'></td>
<td><button type='submit' style='height: 100%;'>Agregar Administrador</button></td>
</form>
</tbody>
</table>
</div>
</div>