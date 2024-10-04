<?php
include ('conex.php');

if (isset($_POST['BTnGuardar'])) {
    $idUsuario = $_POST['idUsuario'];
    $idAnimal = $_POST['idAnimal'];
    $Calificacion = $_POST['Calificacion'];

    $coso = "INSERT INTO animalfavorito (idUsuario, idAnimal, Calificacion) 
        VALUES (
            '$idUsuario',
            '$idAnimal ',
            '$Calificacion')";

    if (mysqli_query($conexion, $coso) == TRUE) {
        echo "<script>
                location.href='../Vista/app/admin/MascotasFav.php';
              </script>";
    } else {
        echo "<script>
                alert('El registro no pudo ser guardado');
                location.href='../Vista/app/admin/MascotasFav.php';
              </script>";
    }
}

mysqli_close($conexion);
?>
