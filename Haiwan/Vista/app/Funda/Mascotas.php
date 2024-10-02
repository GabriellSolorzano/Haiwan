<?php
include('Menu.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Mascotas</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="col-md-12 align-self-end card-header py-3 justify-content-end">
            <button class="btn btn-sm btn-primary offset-md-10 col-md-2" data-toggle="modal" data-target="#exampleModal">Nueva Mascota</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Cód. Mascota</th>
                            <th>Nombre</th>
                            <th>Foto</th>
                            <th>Descripción</th>
                            <th>Tipo Animal</th>
                            <th>Raza</th>
                            <th>Tamaño</th>
                            <th>Color Primario</th>
                            <th>Color Secundario</th>
                            <th>Edad Promedio</th>
                            <th>Ciudad</th>
                            <th>Departamento</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tfoot></tfoot>
                    <tbody>
                        <?php 
                        include('../../../Control/Conex.php'); 
                        $cons = $conexion->query("SELECT animal.idAnimal, animal.Nombre, animal.Foto, animal.Descripcion, tipoanimal.Descripcion AS tipoDescripcion, raza.Descripcion AS razaDescripcion, tamaños.descripcion AS tamanioDescripcion, color.Descripcion AS colorPrimario, color.Descripcion AS colorSecundario, animal.EdadPromedio, ciudad.Descripcion AS ciudadDescripcion, departamento.Descripcion AS departamentoDescripcion
                        FROM animal
                        INNER JOIN tipoanimal ON animal.idTipoAnimal = tipoanimal.idTipoAnimal
                        INNER JOIN raza ON animal.idRaza = raza.idRaza
                        INNER JOIN tamaños ON animal.idTamaño = tamaños.idTamaño
                        INNER JOIN color ON animal.idColor AND animal.idColor2 = color.idColor
                        INNER JOIN ciudad ON animal.idCiudad = ciudad.idCiudad
                        INNER JOIN departamento ON animal.idDepartamento = departamento.idDepartamento;");

                        while ($row = $cons->fetch_row()) {
                        ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row[0]); ?></td>
                                <td><?php echo htmlspecialchars($row[1]); ?></td>
                                <td><img src="data:image/jpeg;base64,<?php echo base64_encode($row[2]); ?>" width="100"></td>
                                <td><?php echo htmlspecialchars($row[3]); ?></td>
                                <td><?php echo htmlspecialchars($row[4]); ?></td>
                                <td><?php echo htmlspecialchars($row[5]); ?></td>
                                <td><?php echo htmlspecialchars($row[6]); ?></td>
                                <td><?php echo htmlspecialchars($row[7]); ?></td>
                                <td><?php echo htmlspecialchars($row[8]); ?></td>
                                <td><?php echo htmlspecialchars($row[9]); ?></td>
                                <td><?php echo htmlspecialchars($row[10]); ?></td>
                                <td><?php echo htmlspecialchars($row[11]); ?></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" onclick="location.href='modificar.php?id=<?php echo $row[0]; ?>'"><img src="img/Modificar.png" width="25px"></button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-danger" onclick="location.href='../../../Control/borrarMascotas.php?id=<?php echo $row[0]; ?>'"><img src="img/Eliminar.png" width="25px"></button>
                                </td>
                            </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Modal for New Pet -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color:black;">Nueva Mascota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../../../controlador/crearUsuario.php" method="post" enctype="multipart/form-data">
                    <!-- Form fields... -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label style="color:black;" for="input_nombre">Nombre</label>
                            <input type="text" class="form-control" name="Nombre" placeholder="Nombre mascota" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label style="color:black;" for="input_foto">Foto</label>
                            <input type="file" class="form-control" name="Foto" required>
                        </div>
                    </div>
                    <!-- Rest of the form... -->
                    <center><button type="submit" class="btn btn-primary" name="BTnGuardar">Guardar</button></center>
                </form>
            </div>
        </div>
    </div>
</div>



</div>
<!-- End of Content Wrapper -->

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

</body>
</html>
