<?php 
include ('conex.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BTnGuardar'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
 $nombre = $_POST['input_nombre'];
	$apellido = $_POST['input_apellido'];
	$documento =$_POST['input_documento'];
	$tipoDocumento = $_POST['input_tipoDocumento'];
	$tipoUsuario = $_POST['input_tipoUsuario'];
    $genero = $_POST['input_genero'];
	$fechaNacimiento = $_POST['input_fechaNacimiento'];
    $direccion = $_POST['input_direccion'];
    $telefono = $_POST['input_telefono'];
    $email = $_POST['input_email'];
    $contraseña = $_POST['input_contrasena'];
	
	

	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO usuario (nombre, apellido, documento, tipoDocumento, tipoUsuario, genero, fechaNaciemiento, direccion, telefono, email, contraseña) 
	VALUES ( ' ',
            '$nombre',
			'$apellido',
			'$documento',
			'$tipoDocumento',
			'$tipoUsuario',
			'$fechaNacimiento',
            '$direccion',
            '$telefono',
            '$email',
            '$contraseña',
			'')";
	
if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
				location.href='../vista/App/Admon/usuario.php';
					</script>";
			}else{
				"<script>
				alert('El registro no pudo ser guardado');
				location.href='../vista/App/Admon/usuario.php';
					</script>";
			} 
  }

  mysqli_close($conexion);
 ?>