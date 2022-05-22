<?php

include "config.php";

$cod_user=$_GET['id'];

$sql="UPDATE tb_usuarios SET activacion = 1 WHERE usuario = '$cod_user'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: activar.php");
    }
?>
