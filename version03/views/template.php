<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title> 
	<link rel="stylesheet" " href="">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
     			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      				<span class="icon-bar"></span>
       		    	<span class="icon-bar"></span>
        			<span class="icon-bar"></span>                        
      			</button>
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php?action=usuario">Usuario</a></li>
					<li class="active"><a href="index.php?action=categoria">Categorias</a></li>
					<li class="active"><a href="index.php?action=producto">Productos</a></li>
					<li class="active"><a href="index.php?action=venta">Venta</a></li>
				</ul>	
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php?action=registro"><span class="glyphicon glyphicon-lock"></span>Registro</a></li>
					<li><a href="index.php?action=ingreso"><span class="glyphicon glyphicon-user"></span>Ingreso</a></li>
					<li><a href="index.php?action=salir"><span class="glyphicon glyphicon-off"></span>Salir</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section>
		<?php 

			$a = new mvcController();
			$a -> enlacesPaginasController();

		 ?>
	</section>
	
</body>
</html>


















