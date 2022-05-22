<?php 	   
	session_start();
	 include "config.php";
	 require 'funciones.php';
	 	if (isset($_SESSION['usuario']))
	 	{ 
	 		header("location: principal.php");	
		}	else
			{	
	$errors = array();
	
	if(!empty($_POST))
	{	
		$usuario = $conexion->real_escape_string($_POST['usuario']);	
			
		$password = $conexion->real_escape_string($_POST['contrasena']);	
			
		if(isNullLogin($usuario, $password))
		{
			$errors[] = "Debe llenar todos los campos";
		}
			$errors[] = Login($usuario, $password);
	}

?>	
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ingreso</title> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="css/estilos.css" rel="stylesheet" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	.carousel-inner > .item > img,
	.carousel-inner > .item > a > img {
	width: 100%;
	margin: auto;
	}
	</style>
	<?php include ("inc/headcommon.php");?>
	
</head>
<body> 
<section>
	<div class="container">
		<div class="row">
				<div class="col-xs-12 col-sm-4 col-sd-4 col-lg-4  "></div>
				<div class="col-xs-12 col-sm-4 col-sd-4 col-lg-4  ">
				<div class="col-xs-12 col-sm-12">
					<center></center>
					<br><br>
				</div>
				<br><br>
				<h1 class="col-12">Iniciar Sesión</h1>
				<br><br>
					<form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
						<div class="form-group text-center">
	                    	<img src="img/Login-users.png" height="100" width="100"/>
	                    	<p><strong>Wellcome to The Login System</strong></p>
	                	</div>
								<div style="margin-bottom: 25px" class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="usuario o email" required>                                  
								</div>
								
								<div style="margin-bottom: 25px" class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input id="password" type="password" class="form-control" name="contrasena" placeholder="contraseña" required>
								</div>
							<div>
								<script>
  								function mostrar(){
      							var tipo = document.getElementById("password");
      							if(tipo.type == "password"){
          						tipo.type = "text";
      							}else{
          						tipo.type = "password";
      							}
  								}
								</script>
								<input class="btn btn-primary" type="checkbox" onclick="mostrar()"> Ver Contraseña<br><br>
								<div style="margin-top:10px" class="form-group">
									<div class="col-sm-12 controls">
										<button id="btn-login" type="submit" class="col-xs-12 btn btn-success">Iniciar Sesi&oacute;n</a>
									</div>
								</div><br>
								<div class="panel-heading">
									<div style="float:right; font-size: 100%; position: relative; top:-10px"><a href="recuperarpass.php">¿Olvid&oacute; su contraseña?</a></div>
									<a href="registro.php">Registrate aquí</a>
									</div>
						</form>
						<?php echo resultblock($errors); ?>			
				</div>

				<div class="col-xs-12 col-sm-4 col-sd-4 col-lg-4  "></div>
		</div>
	</div>	
</section>
		<?php 	} ?>

</script>
</body>
</html>
 