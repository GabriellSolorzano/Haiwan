<?php
include ('conex.php');

if (isset($_POST['BTnGuardar'])) {
    $idFundacion = $_POST['idFundacion'];
    $idAnimal = $_POST['idAnimal'];

    $coso = "INSERT INTO residenciaanimal (idFundacion, idAnimal) 
        VALUES (
            '$idFundacion',
            '$idAnimal')";

    if (mysqli_query($conexion, $coso) == TRUE) {
        echo "<script>
                location.href='../Vista/app/admin/AnimalFunda.php';
              </script>";
    } else {
        echo "<script>
                alert('El registro no pudo ser guardado');
                location.href='../Vista/app/admin/AnimalFunda.php';
              </script>";
    }
}

mysqli_close($conexion);
?>
