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
                <a href="about.php" class="nav-item nav-link active">Nosotros</a>
                <a href="Fundaciones.php" class="nav-item nav-link">Fundaciones</a>
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


    <!-- Page Header Start -->
    <div class="container-fluid page-header-1 py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Nosotros</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Páginas</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nosotros</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" data-wow-delay="0.1s" src="img/acerca de 5.jpg" height="50000px">
                </div>
                <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-1 text-primary mb-0">25</h1>
                    <p class="text-primary mb-4">Años de experiencia.</p>
                    <h1 class="display-5 mb-4">"La vida es mejor con una mascota a tu lado"</h1>
                    <p class="mb-4">Haiwan es un aplicativo que tiene como función poder adoptar cualquier animal doméstico, cumpliendo con el fin de apoyar a todo refugio y organizaciones de cuidados de mascotas para encontrarles a estos animales un nuevo hogar.</p>

                </div>

                <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-5">
                        <div class="col-md-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <i class="fa fa-award fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">"Nada como lo que se ha visto antes"</h4>
                                <span>Brindamos un servicio cómodo y revolucionario nunca antes visto para nuestros amigos peludos.</span>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <i class="fa fa-users fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Equipo dedicado</h4>
                                <span>Nuestro equipo trabaja diariamente para mejorar nuestros servicios como empresa y funcionalidad
                                    en nuestro sitio web.</span>
                            </div>
                        </div>
                    </div>
                </div>

          
                <div class="col-lg-6 col-md-12 wow fadeInUp">
                    <h2> Misión</h2><br>
                    <p class="mb-4">
                        Conectar a los animales abandonados de los albergues y refugios de Medellín con hogares amorosos, promoviendo la adopción responsable y concientizando a la comunidad sobre el cuidado y la protección de los animales en situación de calle. Nuestra misión es brindar una plataforma accesible y confiable que fomente el bienestar animal y contribuya a reducir la población de animales sin hogar en nuestra ciudad.
                    </p>
                </div>
                
                <div class="col-lg-6 col-md-12 wow fadeInUp">
                    <h2> Visión</h2><br>
                    <p class="mb-4">
                        Ser la principal plataforma en línea para la adopción de animales en Medellín, reconocida por nuestra dedicación a la causa del bienestar animal y nuestro compromiso con la construcción de una comunidad compasiva y responsable hacia los animales. Nos esforzamos por crear un futuro donde cada animal tenga la oportunidad de vivir una vida plena y feliz en un hogar amoroso.
                    </p>
                </div>
                
                <div class="col-md-12 col-sm-12">
                    <h2>Justificación</h2>
                    <p>
                    La ciudad de Medellín enfrenta un problema persistente de animales abandonados y en situación de calle, lo que conlleva a diversas problemáticas como el maltrato, la proliferación de enfermedades y la sobrepoblación de animales en los albergues y refugios. Nuestro proyecto surge como respuesta a esta necesidad urgente de proporcionar una solución sostenible y compasiva.
La adopción de animales es una forma efectiva de brindarles una segunda oportunidad de vida, pero muchas veces carece de una plataforma centralizada y accesible que facilite este proceso. A través de nuestro aplicativo web, buscamos facilitar el encuentro entre las mascotas necesitadas de un hogar y las personas interesadas en adoptar, creando así vínculos duraderos que beneficien tanto a los animales como a las familias adoptantes.
Además de promover la adopción, también nos dedicamos a sensibilizar a la comunidad sobre la importancia del cuidado y la protección de los animales, fomentando prácticas responsables de tenencia y promoviendo la esterilización como medida efectiva para controlar la población animal. Creemos firmemente que, al trabajar juntos, podemos construir una sociedad más compasiva y solidaria, donde cada animal sea tratado con el respeto y el amor que merece.
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="img/estadisticas 3.jpg">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">312</h1>
                    <span class="fs-5 fw-semi-bold text-light">Clientes Satisfechos</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">460</h1>
                    <span class="fs-5 fw-semi-bold text-light">Mascotas adoptadas</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">264</h1>
                    <span class="fs-5 fw-semi-bold text-light">Trabajadores dedicados</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">419</h1>
                    <span class="fs-5 fw-semi-bold text-light">Centros de adopción de mascotas registrados</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Nuestro equipo</p>
                <h1 class="display-5 mb-5">Conoce a los fundadores de Haiwan</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/samantha.png" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Samantha Quintero Ruiz</h4>
                            <p class="text-primary">Directora de Marketing</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/juan.png" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Juan Manuel Garzón Ocampo</h4>
                            <p class="text-primary">Director Financiero</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/simon.png" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Simón Moná Vargas</h4>
                            <p class="text-primary">Director de Contenido</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/gabriel.png" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Gabriel Jose Solorzano Parra</h4>
                            <p class="text-primary">Director de las TICs</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


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