<?php
include('Menu.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Fundaciones</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="col-md-12 align-self-end card-header py-3 justify-content-end">
                            <button class="btn btn-sm btn-primary offset-md-10 col-md-2 " data-toggle="modal" data-target="#exampleModal">Nuevo Usuario</button>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Fundacion</th>
                                            <th>Tipode de Documento</th>
                                            <th>Tipo de Fundacion</th>
                                            <th>Documento</th>
                                            <th>Razon Social</th>
                                            <th>Direccion</th>
                                            <th>Telefono</th>
                                            <th>Correo</th>
                                            <th>Clave</th>
                                            <th>Ciudad</th>
                                            <th>Departamento</th>
                                            <th>Eliminar</th>
                                            <th>Modificar</th>

                                        </tr>
                                    </thead>
                                    <?php 
                                                  include( '../../../Controlador/conex.php'); 
                                                  $cons = $conexion -> query("SELECT *  FROM usuario");
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
                                        <td><?php echo ''.$row[8].''; ?></td>
                                        <td><?php echo ''.$row[9].''; ?></td>
                                        <td><?php echo ''.$row[10].''; ?></td>
                                    <tbody>
                                        <tr>
                                            <th>33816156</th>
                                            <th>Administrador</th>
                                            <th>Tipo Doc.</th>
                                            <th>Dianeth Yamile</th>
                                            <th>León Valencia</th>
                                            <th>3135417303</th>
                                            <th><center><button class="btn btn-sm btn-danger">Eliminar</center></button></th>
                                            <th><center><button class="btn btn-sm btn-primary">Modificar</center></button></th>
                                        </tr>
                                        <tr>
                                            <th>33816156</th>
                                            <th>Administrador</th>
                                            <th>Tipo Doc.</th>
                                            <th>Dianeth Yamile</th>
                                            <th>León Valencia</th>
                                            <th>3135417303</th>
                                            <th><center><button class="btn btn-sm btn-danger">Eliminar</center></button></th>
                                            <th><center><button class="btn btn-sm btn-primary">Modificar</center></button></th>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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
          <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Nombre:</label>
                    <input type="text" class="form-control" name="Nombre" placeholder="Digita el nombre" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputPassword4">Logo:</label>
                    <input type="file" name="Logo">
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputAddress">Documento:</label>
                  <input type="number" class="form-control" name="Documento" placeholder="Cedula del responsable">
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Razon Social:</label>
                  <textarea type="text" class="form-control" name="RazonSocial" placeholder="Descripcion de la Fundacion"></textarea>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Direccion:</label>
                    <input type="text" class="form-control" name="Direccion" placeholder="Direccion de la sede principal">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputState">Telefono:</label>
                    <input type="number" class="form-control" name="Telefono" placeholder="Numero Telefonico">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputZip">Correo:</label>
                    <input type="text" class="form-control" name="CorreoElectronico">
                  </div>
                  <div class="form-group">
                  <label for="inputAddress">Clave:</label>
                  <input type="passwor" class="form-control" name="Clave" placeholder="Contraseña de la cuenta">
                </div>
                </div>
                
              <center> <button type="submit" class="btn btn-primary">Guardar</button></center> 
              </form>
        </div>
        
      </div>
    </div>
  </div>
  
    
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