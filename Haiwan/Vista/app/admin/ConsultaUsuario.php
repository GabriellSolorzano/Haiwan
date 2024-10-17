<?php
include('Menu.php');
$id = $_REQUEST['id']; // Asegúrate de que el 'id' se pase de manera segura para evitar inyecciones SQL.
include('../../../Control/conex.php');

// Consultamos el registro específico de la tabla usuario
$sql = "SELECT usuario.idUsuario, usuario.Nombre, usuario.Documento, usuario.Correo, usuario.Clave, 
            ciudad.Descripcion AS Ciudad, departamento.Descripcion AS Departamento, usuario.Direccion, 
            usuario.idTipoDocumento, usuario.idTipoUsuario, usuario.idCiudad, usuario.idDeparta
        FROM usuario 
        INNER JOIN tipousuario ON usuario.idTipoUsuario = tipousuario.idTipoUsuario 
        INNER JOIN tipodocumento ON usuario.idTipoDocumento = tipodocumento.IdTipoDocumento 
        INNER JOIN ciudad ON usuario.idCiudad = ciudad.idCiudad 
        INNER JOIN departamento ON usuario.idDeparta = departamento.idDepartamento
        WHERE usuario.idUsuario = '$id'";

$eje = $conexion->query($sql);
if ($eje->num_rows > 0) {
    $row = $eje->fetch_assoc();
} else {
    echo "No se encontraron datos para el ID especificado.";
    exit();
}
?>

<div class="container">
    <h1 class="h3 mb-2 text-gray-800 mb-4">Modificar Usuarios</h1>
    <form action="../../../Control/ModificarUsuarios.php" method="post">
        <input type="hidden" name="idUsuario" value="<?php echo $row['idUsuario']; ?>"> <!-- Agregando idUsuario para saber qué registro modificar -->
        <div class="form-row">
            <div class="form-group col-md-12">
                <label style="color:black;" for="input_nombre">Nombre y Apellido</label>
                <input type="text" class="form-control" name="Nombre" value="<?php echo $row['Nombre']; ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label style="color:black;" for="input_documento">Documento</label>
                <input type="number" class="form-control" name="Documento" value="<?php echo $row['Documento']; ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label style="color:black;" for="input_tipoDocumento">Tipo de documento</label>
                <select id="inputState" name="idTipoDocumento" class="form-control">
                    <?php
                    $sql = "SELECT * FROM tipodocumento";
                    $eje = $conexion->query($sql);
                    while ($row1 = $eje->fetch_row()) { 
                        $selected = ($row1[0] == $row['idTipoDocumento']) ? 'selected' : '';
                        echo '<option value="'.$row1[0].'" '.$selected.'>'.$row1[1].'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label style="color:black;" for="input_tipoUsuario">Tipo Usuario</label>
                <select id="inputState" name="idTipoUsuario" class="form-control">
                    <?php
                    $sql = "SELECT * FROM tipousuario";
                    $eje = $conexion->query($sql);
                    while ($row1 = $eje->fetch_row()) { 
                        $selected = ($row1[0] == $row['idTipoUsuario']) ? 'selected' : '';
                        echo '<option value="'.$row1[0].'" '.$selected.'>'.$row1[1].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label style="color:black;" for="input_email">Correo</label>
                <input type="email" class="form-control" name="Correo" value="<?php echo $row['Correo']; ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label style="color:black;" for="input_ciudad">Ciudad</label>
                <select id="inputState" name="idCiudad" class="form-control">
                    <?php
                    $sql = "SELECT * FROM ciudad";
                    $eje = $conexion->query($sql);
                    while ($row1 = $eje->fetch_row()) { 
                        $selected = ($row1[0] == $row['idCiudad']) ? 'selected' : '';
                        echo '<option value="'.$row1[0].'" '.$selected.'>'.$row1[1].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label style="color:black;" for="input_departamento">Departamento</label>
                <select id="inputState" name="idDeparta" class="form-control">
                    <?php
                    $sql = "SELECT * FROM departamento";
                    $eje = $conexion->query($sql);
                    while ($row1 = $eje->fetch_row()) { 
                        $selected = ($row1[0] == $row['idDeparta']) ? 'selected' : '';
                        echo '<option value="'.$row1[0].'" '.$selected.'>'.$row1[1].'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label style="color:black;" for="input_direccion">Dirección</label>
                <input type="text" class="form-control" name="Direccion" value="<?php echo $row['Direccion']; ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label style="color:black;" for="input_contrasena">Contraseña</label>
                <input type="password" class="form-control" name="Clave" value="<?php echo $row['Clave']; ?>" required>
            </div>
        </div>
        <center><button type="submit" class="btn btn-primary mb-5" name="BTnModifica">Modificar</button></center>
    </form>
</div>
<!-- Footer --> 
<footer class="sticky-footer bg-white mt-5">     
    <div class="container my-auto">         
        <div class="copyright text-center my-auto">             
            <span>Copyright &copy; Haiwan</span>         
        </div>     
    </div> 
</footer> 
<!-- End of Footer --> 
<!-- Bootstrap core JavaScript--> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<!-- Core plugin JavaScript--> 
<script src="vendor/jquery-easing/jquery.easing.min.js"></script> 
<!-- Custom scripts for all pages--> 
<script src="js/sb-admin-2.min.js"></script> 
<!-- Page level plugins --> 
<script src="vendor/datatables/jquery.dataTables.min.js"></script> 
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script> 
<!-- Page level custom scripts --> 
<script src="js/demo/datatables-demo.js"></script>
