<?php
include('Menu.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Usuarios</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="col-md-12 align-self-end card-header py-3 justify-content-end">
                            <button class="btn btn-sm btn-primary offset-md-10 col-md-2" data-toggle="modal" data-target="#exampleModal">Nuevo Usuario</button>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Cód. de Usuario</th>
                                            <th>Tipo Documento</th>
                                            <th>Tipo Usuario</th>
                                            <th>Identificación</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Correo</th>
                                            <th>Contraseña</th>
                                            <th>Modificar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tfoot> 
                                    </tfoot>
                                    <?php 
                                                  include( '../../../Control/Conex.php'); 
                                                  $cons = $conexion -> query("SELECT usuario.idUsuario, tipousuario.Descripcion, tipodocumento.Descripcion, usuario.Documento, usuario.Nombre, usuario.Correo, usuario.Clave, ciudad.Descripcion, departamento.Descripcion, usuario.Direccion
FROM usuario
INNER JOIN tipousuario
ON usuario.idTipoUsuario = tipousuario.idTipoUsuario
INNER JOIN tipodocumento
ON usuario.idTipoDocumento = tipodocumento.IdTipoDocumento
INNER JOIN ciudad
ON usuario.idCiudad = ciudad.idCiudad
INNER JOIN departamento
ON usuario.idDeparta = departamento.idDepartamento");
                                                  while ($row = $cons -> fetch_row()) {
                                                ?>
                                            <tr>
                                        <td><?php echo number_format(''.$row[0].''); ?></td>
                                        <td><?php echo ''.$row[1].''; ?></td>
                                        <td><?php echo ''.$row[2].''; ?></td>
                                        <td><?php echo ''.$row[3].''; ?></td>
                                        <td><?php echo ''.$row[4].''; ?></td>
                                        <td><?php echo ''.$row[5].''; ?></td>
                                        <td><?php echo ''.$row[6].''; ?></td>
                                        <td><?php echo ''.$row[7].''; ?></td>       
            
                   
                                        <!-- Si el usuario presiona el botòn Modificar ira a el archivo Modificarusua, si presiona eliminar irà a Borrarusua en la Carpeta Control--> 
                                        <!-- Onclick nos dice a donde se va a dirigir cuando presione el botón-->    
                                        <td> <center> <button type="submit" class="btn btn-sm btn-primary"><img src="img/Modificar.png" width="25px"></button> 
                                        <td> <center><button type="submit" class="btn btn-sm btn-danger" name="EliminaUsua" onclick="location='../../../Control/borrarUsuarios.php?id=<?php echo ''.$row[0].'' ?>'"><img src="img/Eliminar.png" width="25px"></button></center></td>
                                          
                                                    
                                    </tr>
                                    <?php }   ?>
                                                                  
                                                          </div>
                                                      </div>
                                                  </div>

                                              </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main , Content -->

            

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- MODAL DE USUARIO -->
    <!-- Button trigger modal -->
 
   
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="color:Black;">Nuevo Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="../../../Control/guardarUsuarios.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label style="color:black;" for="input_nombre">Nombre y Apellido</label>
                  <input type="text" class="form-control" name="Nombre" required>
                </div>
              </div>


              <div class="form-row">
                <div class="form-group col-md-6">
                  <label style="color:black;" for="input_documento">Documento</label>
                  <input type="number" class="form-control" name="Documento" required>
                </div>
                <div class="form-group col-md-6">
                  <label style="color:black;" for="input_tipoDocumento">Tipo de documento</label>
                    <select id="inputState" name="idTipoDocumento" class="form-control">
                    <?php  
                        include( '../../../Control/conex.php');
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM tipodocumento";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row1 = $eje->fetch_row()){
                            echo '<option value="'.$row1[0].'">'.$row1[1].'</option>';
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
                        include( '../../../Control/conex.php');
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM tipousuario";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row1 = $eje->fetch_row()){
                            echo '<option value="'.$row1[0].'">'.$row1[1].'</option>';
                          }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label style="color:black;" for="input_email">Correo</label>
                  <input type="email" class="form-control" name="Correo" required>
                </div>
              </div>


              <div class="form-row">
              <div class="form-group col-md-6">
                  <label style="color:black;" for="input_tipoUsuario">Ciudad</label>
                    <select id="inputState" name="idCiudad" class="form-control">
                    <?php  
                        include( '../../../Control/conex.php');
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM ciudad";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row1 = $eje->fetch_row()){
                            echo '<option value="'.$row1[0].'">'.$row1[1].'</option>';
                          }
                        ?>
                    </select>
                </div><div class="form-group col-md-6">
                  <label style="color:black;" for="input_tipoUsuario">Departamento</label>
                    <select id="inputState" name="idDeparta" class="form-control">
                    <?php  
                        include( '../../../Control/conex.php');
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM departamento";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row1 = $eje->fetch_row()){
                            echo '<option value="'.$row1[0].'">'.$row1[1].'</option>';
                          }
                        ?>
                    </select>
                    </div>
                    </div>


              <div class="form-row">
                <div class="form-group col-md-12">
                  <label style="color:black;" for="input_direccion">Dirección</label>
                  <input type="address" class="form-control" name="Direccion" required>
                </div>
              </div>


              <div class="form-row">
                <div class="form-group col-md-12">
                  <label style="color:black;" for="input_contrasena">Contraseña</label>
                  <input type="password" class="form-control" name="Clave" required>
                </div>
              </div>
              <center> <button type="submit" class="btn btn-primary" name="BTnGuardar">Guardar</button></center> 
              </form>
        </div>
        
      </div>
    </div>
  </div>
  </div>

  </div>
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

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