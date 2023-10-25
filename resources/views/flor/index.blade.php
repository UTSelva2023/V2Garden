@extends('layouts.template')
@section('content')

@foreach ($flores as $flore)
        <!-- Portfolio Item 1-->
        <div class="col-md-6 col-lg-4 mb-5">
            <div class="portfolio-item mx-auto" >
                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white"></div>
                </div>
                <img class="img-fluid" src="images/{{ $flore->imagen }}" alt="..." />
                <div class="fh5co-text">
							<h2>{{ $flore->nombre }}</h2>
							<p>{{ $flore->descripcion }}</p>
						</div>
                        <form action="{{ route('flor.destroy',$flore->id) }}" method="POST">
                        <button  type="button" class="btn btn-success btn-sm"  data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $flore->id }}" data-bs-whatever="@mdo"><i class="fa fa-fw fa-edit"></i>Editar</button>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Delete</button>
                                                </form>
            </div>
        </div>

        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal{{ $flore->id }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Editar Flor</h2>
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
                                            <form method="POST" action="{{ route('flor.update', $flore->id) }}"   role="form" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                               

                                                @include('flor.edit')

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
        </div>
                                    @endforeach



@endsection