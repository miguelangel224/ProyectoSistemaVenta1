<h1>INGRESO</h1>

<form method="post">
	
	<input type="text" placeholder="Usuario"  name="user" required=""> 
	<input type="password" placeholder="Contraseña"  name="pass" required="">

	<input type="submit" value="Enviar">

</form>

<?php  

	$ingreso = new mvcController();
	$ingreso -> ingresoUsuarioController();

	if(isset($_GET["action"])){
		if($_GET["action"] = "fallo"){
			echo "Ha Ocurrido un Error";
		}
	}
	
?>