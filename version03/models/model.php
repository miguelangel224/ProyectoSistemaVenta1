<?php 

	class Paginas{

		public function enlacesPaginasModel($enlaces){

			if($enlaces == "ingreso"||
		 	   $enlaces == "usuario"||
		 	   $enlaces == "salir"||
		 	   $enlaces == "categoria"||
		 	   $enlaces == "producto"||
		 	   $enlaces == "venta"||
		 	   $enlaces == "registro"){

				$modulo = "views/modulo/".$enlaces.".php";

			}else if ($enlaces == "index"){

				$modulo = "views/modulo/inicio.php";

			}

			else if ($enlaces == "ok"){

				$modulo = "views/modulo/registro.php";

			}

			else if ($enlaces == "fallo"){

				$modulo = "views/modulo/ingreso.php";

			}

			else{

				$modulo = "views/modulo/registro.php";

			}

			return $modulo;

		}



















	}

 ?>