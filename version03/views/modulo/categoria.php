
<div class="jumbotron text-center">
  <h1>LISTA DE CATEGORIAS</h1>
</div>

<form method="post" align="center">
	
	<input type="text" placeholder="ID" name="NuevaCatID" > 
	<input type="text" placeholder="Descripcion" name="NuevaDescripcion" required="">

	<?php 
		$vista = new mvcController();	
		$vista -> NuevaCategoriaController();
	 ?>

	<input type="submit" value="Agregar" class="btn btn-primary">

</form>


<form method="post" align="center">
  <input type="text" name="descripcionCat" placeholder="Ingrese Codigo Buscar">
  <input type="submit"  value="Buscar" class="btn btn-info">
  <input type="text" name="eliminarIDCat" placeholder="Ingrese Codigo Eliminar">
  <input type="submit"  value="Eliminar" class="btn btn-danger">
</form>
<br>
<br>

<div class="table-responsive">
<table class="table-striped table-bordered table-hover table-condensed" align="center"  BORDER WIDTH="20%" align="center"> 
	<thead>
		<tr align="center" class="info">
			<th>ID</th>
			<th>DESCRIPCION</th>
		</tr>
	</thead>
	<tbody>

		 <?php 

			$vista = new mvcController();
			$vista -> BuscarCategoriaController();
			$vista -> vistaCategoriaController();
			$vista -> EliminarCategoriaController();

			
		 ?>

	</tbody>

</table>

</div>
