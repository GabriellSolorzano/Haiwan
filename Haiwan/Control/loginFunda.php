<?php

session_start();
error_reporting(0);
include('conex.php');

header('Content-Type: text/html; charset=UTF-8');

$btn_login = $_POST['login'];
if(isset($btn_login)){
   $Usuario = $_POST['CorreoUsuario'];

    $Contraseña = $_POST['Contraseña'];


    $database = "SELECT  Correo, Clave, RazonSocial  FROM fundacion WHERE  Correo = '$Usuario' AND Clave = '$Contraseña'";

    $res=$conexion->query($database);
    $fila=$res->fetch_row();
    if($fila[0]==$Usuario && $fila[1]==$Contraseña){
        $_SESSION['user']=$fila[0];
        $_SESSION['Nombre']=$fila[2];
        $msj="Bienvenido " . $_SESSION['Nombre'] . "";
        header('location:../Vista/App/Funda/Index.php?mensaje=$msj');
                  
    }
    else {
        echo "<script>
                    alert('Usuario y/o contraseña incorrectos');
                    location.href='../Vista/App/Funda/loginFunda.php';
                    </script>";
    }
}
?>