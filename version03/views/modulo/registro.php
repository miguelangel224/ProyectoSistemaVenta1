<h1>REGISTRO</h1>


<form method="post">
	
	<input type="text" placeholder="Usuario" name="Registrousuario" required=""> 
	<input type="password" placeholder="Contraseña" name="Registropassword" required="">
	<input type="email" placeholder="Correo" name="Registroemail" required="">

	<?php 

	

		$registro = new mvcController();
		$registro -> registroUsuarioController(); 

		
		if(isset($_GET["action"])){
			if($_GET["action"] == "ok" ){
				echo "Datos Ingreado Correctamente";
			}
		}

	 ?>


	<input type="submit" value="Enviar">

</form>