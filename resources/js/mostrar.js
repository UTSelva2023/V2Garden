var inputImagen = document.getElementById('imagen');
var imagenSeleccionada = document.getElementById('imagenSeleccionada');
inputImagen.addEventListener('change', function() {
var archivo = inputImagen.files[0];
var lector = new FileReader();
lector.onload = function() {
imagenSeleccionada.src = lector.result;
}
lector.readAsDataURL(archivo);
});