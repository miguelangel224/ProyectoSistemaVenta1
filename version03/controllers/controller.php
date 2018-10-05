<?php 
	
	class mvcController{

		public function plantilla(){

		include "views/template.php"; 
		
		}

		public function enlacesPaginasController(){

			if(isset($_GET["action"])){

				$enlaceController = $_GET["action"];
				
			}else{

				$enlaceController = "index";

			}	

			$respuesta = Paginas::enlacesPaginasModel($enlaceController);

			include $respuesta;
			
		}


		#REGISTRO DE USUARIOS

		public function registroUsuarioController(){

			if(isset($_POST["Registrousuario"])){
				$datoscontroller = array("usuario"=>$_POST["Registrousuario"],
										 "password"=>$_POST["Registropassword"],
										 "email"=>$_POST["Registroemail"]); 
				$respuesta = datos::registroUsuarioModel($datoscontroller, "usuarios");
					
				if($respuesta == "correcto"){
					header("location:index.php?action=ok");
				}else{
					header("location:index.php");
				}
			}

		}

		public function ingresoUsuarioController(){
			if(isset($_POST["user"])){
				$datoscontroller = array ("usuario"=>$_POST["user"],
										  "password"=>$_POST["pass"]);

				$respuesta = datos::ingresoUsuarioModel($datoscontroller, "usuarios");

				if($respuesta["usuario"] == $_POST["user"] && $respuesta["password"] == $_POST["pass"]){

					/*session_start();
					$_SESSION["validar"] = true;*/

					header("location:index.php?action=usuario");
				}else{
					header("location:index.php?action=fallo");
				}
			}
		}

		public function vistaUsuariosController(){

			$respuesta = datos::vistaUsuariosModel("usuarios");

			foreach ($respuesta as $fila => $item) {
				echo '
					 <tr>
 						<td>'.$item["usuario"].'</td>
 						<td>'.$item["password"].'</td>
 						<td>'.$item["email"].'</td>
 					</tr>
				';
			}
		}

		public function vistaCategoriaController(){

			$respuesta = datos::vistaCategoriaModel("categoria");

			foreach ($respuesta as $fila => $item) {
				
				echo '
					 <tr>
 						<td>'.$item["CategoriaID"].'</td>
 						<td>'.$item["DescripcionCat"].'</td>
 					</tr>
				';
			}
		}

		public function vistaProductoController(){

			$respuesta = datos::vistaProductoModel("producto","categoria");

			foreach ($respuesta as $fila => $item) {
				
				echo '
					 <tr>
 						<td>'.$item["ProductoID"].'</td>
 						<td>'.$item["DescripcionCat"].'</td>
 						<td>'.$item["DescripcionPro"].'</td>
 						<td>'.$item["Precio"].'</td>
 						<td>'.$item["Stock"].'</td>
 					</tr>
				';
			}
		}


		public function BuscarCategoriaController(){
			if(isset($_POST["descripcionCat"])){
				$datoscontroller = array ("DescripcionCat"=>$_POST["descripcionCat"]);

				$respuesta = datos::BuscarCategoriaModel($datoscontroller, "categoria");

				foreach ($respuesta as $fila => $item) {
				
					echo '
						 <tr>
 							<td>'.$item["CategoriaID"].'</td>
 							<td>'.$item["DescripcionCat"].'</td>
 						</tr>
					';
				}
			}
		}

		public function BuscarProductoController(){
			if(isset($_POST["buscarIDPro"])){
				$datoscontroller = array ("ProductoID"=>$_POST["buscarIDPro"]);

				$respuesta = datos::BuscarProductoModel($datoscontroller, "producto","categoria");

				foreach ($respuesta as $fila => $item) {
				
					echo '
					 <tr>
 						<td>'.$item["ProductoID"].'</td>
 						<td>'.$item["DescripcionCat"].'</td>
 						<td>'.$item["DescripcionPro"].'</td>
 						<td>'.$item["Precio"].'</td>
 						<td>'.$item["Stock"].'</td>
 					</tr>
				';
				}
				
			}
		}

		public function EliminarCategoriaController(){
			if(isset($_POST["eliminarIDCat"])){
				$datoscontroller = array ("CategoriaID"=>$_POST["eliminarIDCat"]);

				$respuesta = datos::EliminarCategoriaModel($datoscontroller, "categoria");

				foreach ($respuesta as $fila => $item) {
				
					echo '
						 <tr>
 							<td>'.$item["CategoriaID"].'</td>
 						</tr>
					';
				}
			}
		}

		public function EliminarProductoController(){
			if(isset($_POST["eliminarIDPro"])){
				$datoscontroller = array ("ProductoID"=>$_POST["eliminarIDPro"]);

				$respuesta = datos::EliminarProductoModel($datoscontroller, "producto");

				foreach ($respuesta as $fila => $item) {
				
					echo '
						 <tr>
 							<td>'.$item["ProductoID"].'</td>
 						</tr>
					';
				}
			}
		}


		public function NuevaCategoriaController(){

			if(isset($_POST["NuevaCatID"])){
				$datoscontroller = array("CategoriaID"=>$_POST["NuevaCatID"],
										 "DescripcionCat"=>$_POST["NuevaDescripcion"]);

				$respuesta = datos::NuevaCategoriaModel($datoscontroller, "categoria");
				
			}

		}


		public function NuevoProductoController(){

			if(isset($_POST["NuevaProID"])){
				$datoscontroller = array("ProductoID"=>$_POST["NuevaProID"],
										 "CategoriaID"=>$_POST["NuevaCategoria"],
										 "DescripcionPro"=>$_POST["NuevaDescripcion"],
										 "Precio"=>$_POST["NuevoPrecio"],
										 "Stock"=>$_POST["NuevoStock"]);

				$respuesta = datos::NuevoProductoModel($datoscontroller, "producto");
				
			}

		}


		public function ListaCategoriaController(){

			$respuesta = datos::ListaCategoriaModel("categoria");

			foreach ($respuesta as $fila => $item) {
					
					echo "<option>";
					echo $item["DescripcionCat"];
					echo "</option>";
			}
		}





		public function vistaVentaController(){

			$respuesta = datos::vistaVentaModel("venta","usuarios","producto","categoria");

			foreach ($respuesta as $fila => $item) {
				
				echo '
					 <tr>
 						<td>'.$item["VentaID"].'</td>
 						<td>'.$item["usuario"].'</td>
 						<td>'.$item["DescripcionCat"].'</td>
 						<td>'.$item["DescripcionPro"].'</td>
 						<td>'.$item["Precio"].'</td>
 					</tr>
				';
			}
		}


		public function EliminarVentaController(){
			if(isset($_POST["eliminarVenta"])){
				$datoscontroller = array ("VentaID"=>$_POST["eliminarVenta"]);

				$respuesta = datos::EliminarVentaModel($datoscontroller, "venta");

				foreach ($respuesta as $fila => $item) {
				
					echo '
						 <tr>
 							<td>'.$item["VentaID"].'</td>
 						</tr>
					';
				}
			}
		}


		public function BuscarVentaController(){
			if(isset($_POST["buscarVenta"])){
				$datoscontroller = array ("VentaID"=>$_POST["buscarVenta"]);

				$respuesta = datos::BuscarVentaModel($datoscontroller,"venta","usuarios","producto","categoria");

				foreach ($respuesta as $fila => $item) {
				
					echo '
						<tr>
 							<td>'.$item["VentaID"].'</td>
 							<td>'.$item["usuario"].'</td>
 							<td>'.$item["DescripcionCat"].'</td>
 							<td>'.$item["DescripcionPro"].'</td>
 							<td>'.$item["Precio"].'</td>
 						</tr>
					';
				}
				
			}
		}


		public function NuevoVentaController(){

			if(isset($_POST["NuevaVentaID"])){
				$datoscontroller = array("VentaID"=>$_POST["NuevaVentaID"],
										 "id"=>$_POST["NuevoUsuario"],
										 "ProductoID"=>$_POST["NuevoProducto"]);

				$respuesta = datos::NuevoVentaModel($datoscontroller, "venta");
				
			}

		}





	}

 ?>