<?php
include('Menu.php');
$id = $_REQUEST['id'];
include('../../../Control/conex.php');

// Consultamos el registro específico de la tabla fundacion
$sql = "SELECT fundacion.idFundacion, fundacion.RazonSocial, fundacion.Documento, 
                fundacion.Telefono, fundacion.Correo, fundacion.Direccion, 
                ciudad.Descripcion AS Ciudad, departamento.Descripcion AS Departamento
        FROM fundacion 
        INNER JOIN ciudad ON fundacion.idCiudad = ciudad.idCiudad 
        INNER JOIN departamento ON fundacion.idDeparta = departamento.idDepartamento
        WHERE fundacion.idFundacion = '$id'";

$eje = $conexion->query($sql);
if ($eje->num_rows > 0) {
    $row = $eje->fetch_assoc();
} else {
    echo "No se encontraron datos para el ID especificado.";
    exit();
}
?>

<div class="container">
    <h1 class="h3 mb-2 text-gray-800 mb-4">Modificar Fundación</h1>
    <form action="../../../Control/ModificarFundacion.php" method="post">
        <input type="hidden" name="idFundacion" value="<?php echo $row['idFundacion']; ?>">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label style="color:black;" for="input_razonSocial">Razón Social</label>
                <input type="text" class="form-control" name="RazonSocial" value="<?php echo $row['RazonSocial']; ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label style="color:black;" for="input_documento">Documento</label>
                <input type="text" class="form-control" name="Documento" value="<?php echo $row['Documento']; ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label style="color:black;" for="input_telefono">Teléfono</label>
                <input type="text" class="form-control" name="Telefono" value="<?php echo $row['Telefono']; ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label style="color:black;" for="input_correo">Correo</label>
                <input type="email" class="form-control" name="Correo" value="<?php echo $row['Correo']; ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label style="color:black;" for="input_direccion">Dirección</label>
                <input type="text" class="form-control" name="Direccion" value="<?php echo $row['Direccion']; ?>" required>
            </div>
        </div>
        <!-- Similar approach for Ciudad and Departamento -->
        <center><button type="submit" class="btn btn-primary mb-5" name="BTnModifica">Modificar</button></center>
    </form>
</div>
<!-- Footer and Scripts -->
