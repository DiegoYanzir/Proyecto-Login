 <?php 
$conexion=  new mysqli ('localhost', 'root', '' ,'dba_login');
if ($conexion->connect_error) {
	die('Error en la conexion' . $conexion->connect_error);
}
?>