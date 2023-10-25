@extends('layouts.app')

@section('template_title')
    Create Flore
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Flore</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('flor.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('flor.form')

                        </form>
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
            </div>
        </div>
    </section>
@endsection
