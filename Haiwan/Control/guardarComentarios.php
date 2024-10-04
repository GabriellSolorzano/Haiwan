<?php
include ('conex.php');

if (isset($_POST['BTnGuardar'])) {
    $idUsuario = $_POST['idUsuario'];
    $idPublica = $_POST['idPublica'];
    $Comentario = $_POST['Comentario'];
    $Calificacion = $_POST['Calificacion'];

    $coso = "INSERT INTO comentarios (idUsuario, idPublica, Comentario, Calificacion) 
        VALUES (
            '$idUsuario',
            '$idPublica',
            '$Comentario',
            '$Calificacion')";

    if (mysqli_query($conexion, $coso) == TRUE) {
        echo "<script>
                location.href='../Vista/app/admin/Comentarios.php';
              </script>";
    } else {
        echo "<script>
                alert('El registro no pudo ser guardado');
                location.href='../Vista/app/admin/Comentarios.php';
              </script>";
    }
}

mysqli_close($conexion);
?>
