<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Mi Portafolio</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/stilos.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-dark text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Mi Portafolio</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Acerca de</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contactame</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br/>
        <!-- flor Section-->
        <section class="page-section" id="">
            <div class="container">
                <!-- flor Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Flores</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-eye"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                @if ($message = session('success'))
                <div class="alert alert-success"> 
                    <p>{{$message}}</p>
                </div>
                    
                @endif

               
                   <!--Boton crear-->
                <div class="float-right{">
                        <a class="btn btn-primary btn-sm float-right" data-bs-toggle="modal"  data-bs-target="#florModal" data-bs-whatever="@mdo"  data-placement="right"><i class="fas fa-plus"></i>
                        {{ __('Crear Nuevo') }}
                        </a>
                    
                </div>
                  <!--End Boton crear-->
                  <br/>
                <!-- Mostrar flormulario editar-->
                <div class="row justify-content-center">

                @yield('content')

                    
                </div>
                <!-- end flormulario editar-->
                <!-- Mostrar flormulario registrar-->
                <div class="row justify-content-center">
                <div class="row justify-content-center">

                        <!-- Portfolio Modal 1-->
                            <div class="portfolio-modal modal fade" id="florModal" tabindex="-1" aria-labelledby="florModal" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                        <div class="modal-body text-center pb-5">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8">
                                                        <!-- Portfolio Modal - Title-->
                                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Registrar Flor</h2>
                                                        <!-- Icon Divider-->
                                                        <div class="divider-custom">
                                                            <div class="divider-custom-line"></div>
                                                            <div class="divider-custom-icon"><i class="fas fa-edit"></i></div>
                                                            <div class="divider-custom-line"></div>
                                                        </div>
                                        <!-- Formulario editar -->
                                        <div class="card card-default">
                                            <div class="card-header">
                                                <span class="card-title"></span>
                                            </div>
                                            <div class="card-body">
                                                        @includeif('partials.errors')
                                                        <form method="POST" action="{{ route('flor.store') }}"  role="form" enctype="multipart/form-data">
                                                            @csrf

                                                            @include('flor.crear')

                                                        </form>
                                                <!--Mostrar imagen-->
                                                <script>
                                                        function mostrarImagen() {
                                                        var archivo = document.getElementById("imagen").files[0];
                                                        if (archivo) {
                                                        var lector = new FileReader();
                                                        lector.onload = function(evento) {
                                                        document.getElementById("vista-previa").src = evento.target.result;
                                                        }
                                                        lector.readAsDataURL(archivo);
                                                        }
                                                        }

                                                        // Función para mostrar la imagen cuando se edita el formulario
                                                        function mostrarImagenEditada() {
                                                        // Obtener la URL de la imagen desde el servidor o desde el campo del formulario
                                                        var urlImagen = imagen(); // Esta función debe ser definida por ti

                                                        // Mostrar la imagen en la etiqueta <img>
                                                        if (urlImagen) {
                                                        document.getElementById("vista-previa").src = urlImagen;
                                                        }
                                                                                }

                                                        // Llamar la función mostrarImagenEditada() cuando se carga la página
                                                        window.onload = function() {
                                                            mostrarImagenEditada();
                                                        };
                                            </script>
                                                
                                            </div>
                                        </div>
                                        <!-- End Formulario editar -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                
                 
                    
                </div>
                <!-- End flormulario registrar-->

            </div>
        </div>

                    
                </div>
            </div>
        </section>

  
        <!-- Footer-->
        <footer class="footer bg-dark text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Ubiación</h4>
                        <p class="lead mb-0">
                            El Porvenir Chiapas
                            <br/>
                            CP: 30970
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Redes sociales</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Perfil</h4>
                        <p class="lead mb-0">
                            Desarrollador Web Back-end 
                            <br>
                            Administrador de base de datos
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright bg-gray-900 py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2022</small></div>
        </div>
        <!-- Portfolio Modals-->

        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
