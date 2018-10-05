		<?php	

	require_once "conexion.php";

	class datos extends conexion {

		public function registroUsuarioModel($datosModel, $tabla){

			$consulta = conexion::conectar()->prepare("INSERT INTO $tabla (usaurio,password,email) VALUES (:usuario,:password,:email)");
			$consulta->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
			$consulta->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
			$consulta->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
			if($consulta->execute()){
				return "correcto";
			}else{
				return "error";
			}

			$consulta->close();  

		}

		public function ingresoUsuarioModel($datosModel, $tabla){

			$consulta = conexion::conectar()->prepare("SELECT usaurio,password FROM $tabla WHERE usuario = :usuario");
			$consulta ->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);

			$consulta->execute();

			return $consulta->fetch();  

			$consulta->close(); 

		}

		public function vistaUsuariosModel($tabla){

			$consulta = conexion::conectar()->prepare("SELECT id, usuario, password, email FROM $tabla");

			$consulta -> execute();

			return $consulta->fetchAll(); 
		

			$consulta->close();

		}

		public function vistaCategoriaModel($tabla){

			$consulta = conexion::conectar()->prepare("SELECT CategoriaID, DescripcionCat FROM $tabla");

			$consulta -> execute();

			return $consulta->fetchAll(); 
			
			$consulta->close();

		}

		public function vistaProductoModel($pro, $cat){

			$consulta = conexion::conectar()->prepare("SELECT ProductoID, DescripcionCat, DescripcionPro, Precio, Stock FROM $pro INNER JOIN $cat on $pro.CategoriaID = $cat.CategoriaID");

			$consulta -> execute();

			return $consulta->fetchAll(); 
			
			$consulta->close();

		}

		public function BuscarCategoriaModel($datosModel, $tabla){

			$consulta = conexion::conectar()->prepare("SELECT CategoriaID, DescripcionCat FROM $tabla WHERE DescripcionCat = :descripcionCat ");
			$consulta ->bindParam(":descripcionCat", $datosModel["DescripcionCat"], PDO::PARAM_STR);

			$consulta -> execute();

			return $consulta->fetchAll(); 
			
			$consulta->close();

		}

		public function BuscarProductoModel($datosModel, $pro, $cat){

			$consulta = conexion::conectar()->prepare("SELECT ProductoID, DescripcionCat, DescripcionPro, Precio, Stock FROM $pro INNER JOIN $cat on $pro.CategoriaID = $cat.CategoriaID WHERE ProductoID = :productoID");
			$consulta ->bindParam(":productoID", $datosModel["ProductoID"], PDO::PARAM_STR);

			$consulta -> execute();

			return $consulta->fetchAll(); 
			
			$consulta->close();

		}

		public function EliminarCategoriaModel($datosModel, $tabla){
			$consulta = conexion::conectar()->prepare("DELETE FROM $tabla WHERE CategoriaID=:categoriaID");
			$consulta ->bindParam(":categoriaID", $datosModel["CategoriaID"], PDO::PARAM_STR);

			$consulta -> execute();

			return $consulta->fetchAll(); 
			
			$consulta->close();

		} 

		public function EliminarProductoModel($datosModel, $tabla){
			$consulta = conexion::conectar()->prepare("DELETE FROM $tabla WHERE ProductoID=:productoID");
			$consulta ->bindParam(":productoID", $datosModel["ProductoID"], PDO::PARAM_STR);

			$consulta -> execute();

			return $consulta->fetchAll(); 
			
			$consulta->close();

		}


		public function NuevaCategoriaModel($datosModel, $tabla){

			$consulta = conexion::conectar()->prepare("INSERT INTO $tabla (CategoriaID, DescripcionCat) VALUES (:categoriaID, :descripcionCat)");
			$consulta->bindParam(":categoriaID", $datosModel["CategoriaID"], PDO::PARAM_STR);
			$consulta->bindParam(":descripcionCat", $datosModel["DescripcionCat"], PDO::PARAM_STR);
			
			$consulta -> execute();

			return $consulta->fetch(); 
			
			$consulta->close();

		}

		public function NuevoProductoModel($datosModel, $tabla){

			$consulta = conexion::conectar()->prepare("INSERT INTO $tabla (ProductoID, CategoriaID,DescripcionPro,Precio,Stock) VALUES (:productoID, :categoriaID,:descripcionPro,:precio,:stock)");
			$consulta->bindParam(":productoID", $datosModel["ProductoID"], PDO::PARAM_STR);
			$consulta->bindParam(":categoriaID", $datosModel["CategoriaID"], PDO::PARAM_STR);
			$consulta->bindParam(":descripcionPro", $datosModel["DescripcionPro"], PDO::PARAM_STR);
			$consulta->bindParam(":precio", $datosModel["Precio"], PDO::PARAM_STR);
			$consulta->bindParam(":stock", $datosModel["Stock"], PDO::PARAM_STR);
			
			$consulta -> execute();

			return $consulta->fetch(); 
			
			$consulta->close();

		}


		public function ListaCategoriaModel($tabla){

			$consulta = conexion::conectar()->prepare("SELECT DescripcionCat FROM $tabla");

			$consulta -> execute();

			return $consulta->fetchAll(); 
			
			$consulta->close();

		}

		public function vistaVentaModel($venta, $usuarios,$producto, $categoria){

			$consulta = conexion::conectar()->prepare("SELECT VentaID , usuario, DescripcionCat, DescripcionPro, Precio FROM $venta 
				INNER JOIN $usuarios on $venta.id = $usuarios.id
				INNER JOIN $producto on $venta.ProductoID = $producto.ProductoID
				INNER JOIN $categoria on $producto.CategoriaID = $categoria.CategoriaID");

			$consulta -> execute();

			return $consulta->fetchAll(); 
			
			$consulta->close();

		}

		public function EliminarVentaModel($datosModel, $tabla){
			$consulta = conexion::conectar()->prepare("DELETE FROM $tabla WHERE VentaID=:ventaID");
			$consulta ->bindParam(":ventaID", $datosModel["VentaID"], PDO::PARAM_STR);

			$consulta -> execute();

			return $consulta->fetchAll(); 
			
			$consulta->close();

		}

		public function BuscarVentaModel($datosModel,$venta, $usuarios,$producto, $categoria){

			$consulta = conexion::conectar()->prepare("SELECT VentaID , usuario, DescripcionCat, DescripcionPro, Precio FROM $venta 
				INNER JOIN $usuarios on $venta.id = $usuarios.id
				INNER JOIN $producto on $venta.ProductoID = $producto.ProductoID
				INNER JOIN $categoria on $producto.CategoriaID = $categoria.CategoriaID
				WHERE VentaID = :ventaID");
			$consulta ->bindParam(":ventaID", $datosModel["VentaID"], PDO::PARAM_STR);

			$consulta -> execute();

			return $consulta->fetchAll(); 
			
			$consulta->close();

		}


		public function NuevoVentaModel($datosModel, $tabla){

			$consulta = conexion::conectar()->prepare("INSERT INTO $tabla (VentaID, id,ProductoID) VALUES (:ventaID, :idd,:productoID)");
			$consulta->bindParam(":ventaID", $datosModel["VentaID"], PDO::PARAM_STR);
			$consulta->bindParam(":idd", $datosModel["id"], PDO::PARAM_STR);
			$consulta->bindParam(":productoID", $datosModel["ProductoID"], PDO::PARAM_STR);
			
			$consulta -> execute();

			return $consulta->fetch(); 
			
			$consulta->close();

		}




	}

?>
