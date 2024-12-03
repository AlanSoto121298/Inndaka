
//para que se repitan los videillos

document.addEventListener('DOMContentLoaded',function(){
  var video = document.getElementById('video');
  video.addEventListener('ended',function(){
    this.currentTime =0;
    this.play();
  }, false);
})

//para que carguen normal
function cargarVideo(source) {
  var video = document.getElementById('video');
  video.src = source;
  video.load();
  video.play();
}


function mostrarImagen(rutaImagen) {
  var imagen = document.createElement("img");
  imagen.src = rutaImagen;
  document.body.appendChild(imagen);
}
