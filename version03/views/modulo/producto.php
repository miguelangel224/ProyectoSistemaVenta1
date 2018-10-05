
<div class="jumbotron text-center">
  	<h1>LISTA DE PRODUCTOS</h1>
</div>

<form method="post" align="center">
	
	<input type="text" placeholder="ID" name="NuevaProID" > 
	<input type="text" placeholder="Categoria" name="NuevaCategoria" >
	<select class="btn btn-primary">
				
			<?php 

			$vista = new mvcController();
			$vista -> ListaCategoriaController();
			
			  ?>

	</select>
	<input type="text" placeholder="Descripcion" name="NuevaDescripcion" >
	<input type="text" placeholder="Precio" name="NuevoPrecio" required="">
	<input type="text" placeholder="Stock" name="NuevoStock" required="">

	<?php 
		$vista = new mvcController();	
		$vista -> NuevoProductoController();
	 ?>

	<input type="submit" value="Agregar" class="btn btn-primary">

</form>

<form method="post" align="center">
  <input type="text" name="buscarIDPro" placeholder="Ingrese Codigo Buscar">
  <input type="submit"  value="Buscar" class="btn btn-info">
  <input type="text" name="eliminarIDPro" placeholder="Ingrese Codigo Eliminar">
  <input type="submit"  value="Eliminar" class="btn btn-danger">
</form>
<br>
<br>

<div class="table-responsive">
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<tr align="center" class="info">
			<th>ID</th>
			<th>CATEGORIA</th>
			<th>DESCRIPCION</th>
			<th>PRECIO</th>
			<th>STOCK</th>
		</tr>
	</thead>

	<tbody>
		
		<?php 

			$vista = new mvcController();
			$vista -> vistaProductoController();
			$vista -> BuscarProductoController();
			$vista -> EliminarProductoController();

		 ?>

	</tbody>

</table>
</div>

