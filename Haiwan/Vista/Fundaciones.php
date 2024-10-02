<?php
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Haiwan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 col-sm-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span>+57 3135417303</span>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span>haiwanadoptions@gmail.com</span>
                </div>
            </div>
            <div class="col-lg-5 col-sm-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <span>Síguenos:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>

                    <?php
                        if(isset( $_SESSION['user']))
                            {
                                echo '  <span class="py-2 px-lg-5">'.$_SESSION['Nombre'].'</span>';
                            }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0">Haiwan</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link ">Nosotros</a>
                <a href="Fundaciones.php" class="nav-item nav-link active">Fundaciones</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Mascotas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Adopcion.php">En Adopción</a></li>
                        <li><a class="dropdown-item" href="perdidas.php">Perdidas</a></li>
                        <li><a class="dropdown-item" href="Buscadas.php">Buscadas</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="Adoptados.php">Adoptados</a></li>
                    </ul>
                </li>    
                <a href="service.php" class="nav-item nav-link">Servicios</a>
                <a href="contact.php" class="nav-item nav-link">Contacto</a>

                <?php
                if(empty( $_SESSION['user']))
                    {
                        echo '  <a href="quote.php" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Iniciar sesión<i class="fa fa-arrow-right ms-3"></i></a>';
                    }

                else
                    {
                        echo '  <a href="../Control/logout.php" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block" data-toggle="modal" data-target="#logoutModal">Salir<i class="fa fa-arrow-right ms-3"></i></a>';
                    }
?>

            </div>
        </div>
    </nav>
    <!-- Navbar End -->


   


    <?php 
include( '../Control/conex.php'); 
$cons = $conexion -> query(
    "SELECT fundacion.idFundacion, tipodocumento.Descripcion, tipofundacion.Descripcion, fundacion.Documento, fundacion.RazonSocial, fundacion.Foto, fundacion.Direccion, fundacion.Telefono, fundacion.Correo, fundacion.Clave, ciudad.Descripcion, departamento.Descripcion
    FROM fundacion 
    INNER JOIN tipofundacion 
    ON fundacion.idTipoFundacion = tipofundacion.idTipoFundacion
    INNER JOIN tipodocumento
    ON fundacion.idTipoDoc = tipodocumento.IdTipoDocumento
    INNER JOIN ciudad
    ON fundacion.idCiudad = ciudad.idCiudad
    INNER JOIN departamento
    ON fundacion.idDeparta = departamento.idDepartamento;"
);
?>

<!-- El contenedor y la fila deben estar fuera del bucle -->
<div class="container mt-5">
    <center>  <h1 class="display-5 text-center mb-5 mt-5">Fundaciones aliadas</h1></center>
    <div class="row">
        <?php while ($row = $cons -> fetch_row()) { ?>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <!-- Mostrar la imagen -->
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($row[5]); ?>" class="card-img-top" alt="Imagen fundación" style="width:100%; height:auto;">
                    
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row[4]; ?></h5>
                        <p class="card-text"><b>Dirección:</b> <?php echo $row[6]; ?>
                        <b> Teléfono:</b> <?php echo $row[7]; ?></br>
                        <b> Correo:</b> <?php echo $row[8]; ?></br>
                        <b>Ciudad:</b> <?php echo $row[10]; ?></br>
                        <b> Departamento: </b><?php echo $row[11]; ?></br>

                    </div>
                </div>     
            </div>
        <?php } ?>
    </div>
</div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-white mb-4">Nuestras Oficinas</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>CL 78B #75-181, Medellín, Robledo, Medellín, Antioquia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+57 3135417303</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>haiwanadoptions@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-white mb-4">Centros de Adopciones populares</h4>
                    <a class="btn btn-link" href="https://fundacioncorazonanimal.org/">Fundación Corazón Animal</a>
                    <a class="btn btn-link" href="https://www.conpasionanimal.org/">Fundación Con Pasión Animal</a>
                    <a class="btn btn-link" href="https://fundacionorca.org/">Fundación Orca</a>
                    <a class="btn btn-link" href="https://www.instagram.com/laperlamed/?hl=es">La Perla</a>
                    <a class="btn btn-link" href="https://www.instagram.com/fundacionpetson/?hl=es-la">PetSon</a>
                    <a class="btn btn-link" href="https://www.protectoranimales.org/">Sociedad Protectora de Animales de Medellín</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para Salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body" style= "color:black">Presiona "cerrar sesión" en el caso de Salir.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="../Control/Logout.php">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/isotope/isotope.Conoce.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>