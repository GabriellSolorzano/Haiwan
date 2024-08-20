<?php
include ('conex.php');
header( 'Content-Type: text/html; charset=UTF-8'); 
session_start(); 
error_reporting(0); 

$id = $_REQUEST['id'];

$del = $conexion -> query("DELETE FROM usuario WHERE idUsuario = '$id' ");
	if ($del) {
		echo "<script>
		location.href='../Vista/app/admin/usuarios.php#';
		</script>";
		}
        else{
			echo "<script>
			 lert('El registro no pudo ser eliminado');
			location.href='../Vista/app/admin/usuarios.php';
			</script>";

		}


		
 ?>