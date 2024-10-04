<?php
include ('conex.php');

if (isset($_POST['BTnGuardar'])) {
    $idUsuario = $_POST['idUsuario'];
    $idPublicaFund = $_POST['idPublicaFund'];
    $Comentario = $_POST['Comentario'];
    $Calificacion = $_POST['Calificacion'];

    $coso = "INSERT INTO opiniones (idUsuario, idPublicaFund, Comentario, Calificacion) 
        VALUES (
            '$idUsuario',
            '$idPublicaFund',
            '$Comentario',
            '$Calificacion')";

    if (mysqli_query($conexion, $coso) == TRUE) {
        echo "<script>
                location.href='../Vista/app/admin/Opiniones.php';
              </script>";
    } else {
        echo "<script>
                alert('El registro no pudo ser guardado');
                location.href='../Vista/app/admin/Opiniones.php';
              </script>";
    }
}

mysqli_close($conexion);
?>
