<?php 

	/*session_start();
	if(!$_SESSION["validar"]){
		header("location:index.php?action=ingresar");
		exit();
	}*/

 ?>


<div class="jumbotron text-center">
  <h1>LISTA DE USUARIOS</h1>
</div>

<form method="post" align="center">
	
	<input type="text" placeholder="Usuario" name="NuevaVentaID" > 
	<input type="text" placeholder="Contraseña" name="NuevoUsuario" > 
	<input type="text" placeholder="email" name="NuevoProducto" >
	
	<input type="submit" value="Agregar" class="btn btn-primary">

</form>

<form method="post" align="center">
  <input type="text" name="buscarVenta" placeholder="Ingrese Codigo Buscar">
  <input type="submit"  value="Buscar" class="btn btn-info">
  <input type="text" name="eliminarVenta" placeholder="Ingrese Codigo Eliminar">
  <input type="submit"  value="Eliminar" class="btn btn-danger">
</form>
<br>
<br>


<div class="table-responsive">
<table class="table-striped table-bordered table-hover table-condensed" BORDER WIDTH="50%" align="center">

	<thead>
		<tr align="center" class="info">
			<th>Usuario</th>
			<th>Contraseña</th>
			<th>Email</th>
		</tr>
	</thead>

	<tbody>
		
		<?php 

			$vista = new mvcController();
			$vista -> vistaUsuariosController();

		 ?>

	</tbody>

</table>
</div>