<?php
include('Menu.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tipos de Documentos</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Cód. de Tipo de Documento</th>
                                            <th>Tipo</th>
                                        </tr>
                                    </thead>
                                    <tfoot> 
                                    </tfoot>
                                    <?php 
                                                  include( '../../../Control/Conex.php'); 
                                                  $cons = $conexion -> query("SELECT * FROM TipoDocumento");
                                                  while ($row = $cons -> fetch_row()) {
                                                ?>
                                            <tr>
                                        <td><?php echo number_format(''.$row[0].''); ?></td>
                                        <td><?php echo ''.$row[1].''; ?></td>
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