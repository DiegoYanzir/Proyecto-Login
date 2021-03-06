<?php
	require 'config.php';
	include 'funciones.php';
	
	session_start();
	
	if(isset($_SESSION["usuario"])){
		header("location: principal.php");	
	}else
		{

		
	
	$errors = array();
	
	if(!empty($_POST))
	{ 
		$email = $conexion->real_escape_string($_POST['email']);
		
		if(!isEmail($email))
		{
			$errors[] = "Debe ingresar un correo electronico valido";
		}
		
		if(emailExiste($email))
		{			
			$user_id = getValor('usuario', 'correo', $email);
			$nombre = getValor('nombre', 'correo', $email);
			
			$token = generaTokenPass($user_id);
			
			$url = 'http://'.$_SERVER["SERVER_NAME"].'/GIBMAFE/codigo/cambia_pass.php?user_id='.$user_id.'&token='.$token;
			
			$asunto = 'Recuperar Password - GIBMAFE';
			$cuerpo = "Hola $nombre: <br /><br />Se ha solicitado un reinicio de contrase&ntilde;a. <br/><br/>Para restaurar la contrase&ntilde;a, visita la siguiente direcci&oacute;n: <a href='$url'>Restaurar Contrase&ntilde;a</a>";
			
			if(enviarEmail($email, $nombre, $asunto, $cuerpo)){
				echo "Hemos enviado un correo electronico a las direcion $email para restablecer tu Contrase&ntilde;a.<br />";
				echo "<a href='index.php' >Iniciar Sesion</a>";
				exit;
			}else {
			$errors[] = "Error al enviar email, Comuniquese con el Adimistrador";
			}
			} else {
			$errors[] = "La direccion de correo electronico no existe";
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include ("inc/headcommon.php");?>
	<title>Recuperar Pass</title>	
</head>
<body> 
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4">
			</div>

			<div class="col-xs-12 col-sm-4">

					<center><img src="" class="img img-responsive"></center>
					<br><br>
				
				<br>	
				<div style="margin-top:50px" class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">Recuperar Password</div>
					<div style="float:right; font-size: 100%; position: relative; top:-10px"><a href="index.php">Iniciar Sesión</a></div>
				</div>     
				
				<div style="padding-top:30px" class="panel-body">
					
					<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
					
					<form id="loginform" class="form-horizontal AVAST_PAM_nonloginform" role="form" action="" method="POST" autocomplete="off">
						
						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="email" type="email" class="form-control" name="email" placeholder="email" required="">                                        
						</div>
						
						<div style="margin-top:10px" class="form-group">
							<div class="col-sm-12 controls">
								<button id="btn-login" type="submit" class="col-xs-12 btn btn-success">Enviar</button>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-12 control">
								<div style="border-top: 1px solid#888; padding-top:15px; font-size:100%">
									Si no tiene una cuenta! <a href="registro.php">Registrase aquí</a>
								</div>
							</div>
						</div>    
					</form>
					<?php echo resultBlock($errors); ?>
				</div>                     
			</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				
			</div>
		</div>
		
	</div>
	
</section>
<footer style="margin-top: 250px;" id="footer2">
	<div class="container">
		<div class="row">
				
		</div>
	</div>	
</footer>
		<?php  	
		}
 		?>
				<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
				<script src="js/bootstrap.min.js"></script>
</body>
</html>


		
