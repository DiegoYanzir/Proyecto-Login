<?php

	require 'config.php';
	require 'funciones.php';
	
	if(isset($_GET["id"]) AND isset($_GET['val']))
	{
		
		$idUsuario = $_GET['id'];
		$token = $_GET['val'];
		
		$mensaje = validaIdToken($idUsuario, $token);	
	}
	$sql="SELECT usuario,nombre,fecha_registro FROM tb_usuarios WHERE activacion=0";
?>

<html>
	<head>
		<title>Registro</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>
		
	</head>
	<body>
		<div class="container">
			<div class="jumbotron">
				<table class="table">
				  <thead class="thead-dark">
				  	<center>
				  	<h1>Usuarios Inactivos</h1>
				    <tr>
				      <th scope="col">N°</th>
				      <th scope="col">Usuario</th>
				      <th scope="col">Nombre</th>
				      <th scope="col">Fecha de Registro</th>
				      <th scope="col">Activar</th>
				    </tr>
				    </center>
				  </thead>
				  <tbody>
				  	<?php $rs=mysqli_query($conexion, $sql); 
				  	while ($row=mysqli_fetch_assoc($rs)) {?>
				    <tr>
				      <th scope="row">1</th>
				      <td><?php echo $row['usuario']?></td>
				      <td><?php echo $row['nombre']?></td>
				      <td><?php echo $row['fecha_registro']?></td>
				      <td><a href="activadouser.php?id=<?php echo $row['usuario'] ?>" class="btn btn-success">ON</a></td>
				    </tr>
				    <?php }?>
			    	</tbody>
				</table>
			</div>
		</div>
		<center>
		<a href="principal.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Regresar</a>
		</center>
	</body>
</html>														