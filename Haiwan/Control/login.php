<?php

session_start();
error_reporting(0);
include('conex.php');

header('Content-Type: text/html; charset=UTF-8');

$btn_login = $_POST['login'];
if(isset($btn_login)){
    $Usuario = $_POST['CorreoUsuario'];
    $TUsuario = $_POST['TUsuario'];
    $Contraseña = $_POST['Contraseña'];


    $database = "SELECT  Correo, Clave, Nombre, idTipoUsuario
     FROM usuario WHERE Correo = '$Usuario' AND Clave = '$Contraseña'";

    $res=$conexion->query($database);
    $fila=$res->fetch_row();
    if($fila[0]==$Usuario && $fila[1]==$Contraseña){
        $_SESSION['user']=$fila[0];
        $_SESSION['tipo']=$fila[3];
        $_SESSION['Nombre']=$fila[2];
        $msj="Bienvenido " . $_SESSION['Nombre'] . "";
            switch ($_SESSION['tipo']) {

                case '1':
                    header('location:../Vista/index.php');
                    break;

                case '2':
                    header('location:../Vista/app/admin/Mascotas.php?mensaje=$msj');
                    break;
                
                default:
                header('location:../Vista/app/admin/Mascotas.php?msj');
                    break;
            }
    }
    else {
        echo "<script>
                    alert('Usuario y/o contraseña incorrectos');
                    location.href='../Vista/quote.php';
                    </script>";
    }
}
?>