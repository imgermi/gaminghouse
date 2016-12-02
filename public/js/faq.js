window.onload = function(){
var preguntas = document.querySelectorAll("li > h2");
var respuestas = document.querySelectorAll("li > p");
function ocultarR(losH2, losP){
  for(var i = 0; i < losH2.length; i++){
    var preguntas = losH2[i];
    var respuestas = losP[i];
    function create(preguntas,respuestas){
    preguntas.addEventListener('click', function mostrarR(){
      if(respuestas.style.display !== 'none'){
        respuestas.style.display = 'none';
      }
      else{
        respuestas.style.display = 'inline';
      }
    })}
    create(preguntas,respuestas)
  }
}
ocultarR(preguntas, respuestas)
}
