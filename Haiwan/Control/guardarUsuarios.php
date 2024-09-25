<?php
include ('conex.php');

   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BTnGuardar'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
 $nombre = $_POST['Nombre'];
	$documento =$_POST['Documento'];
	$tipoDocumento = $_POST['idTipoDocumento'];
	$tipoUsuario = $_POST['idTipoUsuario'];
    $direccion = $_POST['Direccion'];
    $email = $_POST['Correo'];
    $contraseña = $_POST['Clave'];
	$ciudad = $_POST['idCiudad'];
	$Departamento = $_POST['idDeparta'];	

	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$coso= "INSERT INTO usuario (idUsuario, Nombre, Documento, idTipoDocumento, idTipoUsuario, Direccion,
	 Correo, Clave, idCiudad, idDeparta) 
	VALUES (' ',
            '$nombre',
			'$documento',
			'$tipoDocumento',
			'$tipoUsuario',
            '$direccion',
            '$email',
            '$contraseña',
			'$ciudad'
			'$Departamento')";
			
if(mysqli_query($conexion,$coso)==TRUE) {
		echo "<script>
				location.href='../Vista/app/admin/usuarios.php';
					</script>";
			}
			else{
		echo "<script>
				alert('El registro no pudo ser guardado');
				location.href='../Vista/app/admin/usuarios.php';
					</script>";
			} 
  }

  mysqli_close($conexion);
 ?>