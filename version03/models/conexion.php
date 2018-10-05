
<?php 

	class conexion {

		public function conectar(){
			$con = new PDO("mysql:host=localhost;dbname=venta","root","");
			return $con;
		}

	}

 ?>