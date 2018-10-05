
<div class="jumbotron text-center">
  <h1>LISTA DE VENTAS</h1>
</div>

<form method="post" align="center">
	
	<input type="text" placeholder="ID" name="NuevaVentaID" > 
	<input type="text" placeholder="Usuario" name="NuevoUsuario" > 
	<input type="text" placeholder="Producto" name="NuevoProducto" >

	<?php 
		$vista = new mvcController();	
		$vista -> NuevoVentaController();
	 ?>

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
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<tr align="center" class="info">
			<th>ID</th>
			<th>USUARIO</th>
			<th>CATEGORIA</th>
			<th>DESCRIPCION</th>
			<th>PRECIO</th>
		</tr>
	</thead>

	<tbody>
		
		<?php 

			$vista = new mvcController();
			$vista -> vistaVentaController();
			$vista -> BuscarVentaController();
			$vista -> EliminarVentaController();

		 ?>

	</tbody>

</table>
</div>