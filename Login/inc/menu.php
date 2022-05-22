				<a class="btn-menu"><i class="icono glyphicon glyphicon-align-justify"></i></a>
				<ul class="menu">
	
					<li ><a href="#"><i class="icono izquierda glyphicon glyphicon-user" ></i>Administrador<i class="icono derecha glyphicon glyphicon-menu-down" ></i></a>
						<ul >
							<li>
								<a href="principal.php"><?php echo $_SESSION['nombre']; ?></a>
								<?php if($_SESSION['nombre']=="Diego Gutiérrez"){?>
								<a href="activar.php"><i class="icono izquierda glyphicon glyphicon glyphicon-th-list" ></i>Activar Usuarios</a>
								<?php }?>
							</li>
						</ul>	
					</li>
					<li><a href="logout.php"><i class="icono izquierda glyphicon glyphicon-off" ></i>Cerrar Sesión</a></li>
				</ul>