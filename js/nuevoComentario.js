var puntaje = 0;
var com = '';
var juegoId = 0;
var inicio = 1;

function cargarComentarioYPuntaje(){
    $.ajax({
       url: "nuevoComentario.php",
       data: {
           juegoId: juegoId,
           com: com,
           puntaje: puntaje,
           inicio: inicio
       },
       dataType: "html"
    }).done(function(html){
        $("#comentarioYPuntuacion").html(html);
        
        $("input[name=estrellas]").click(function () {    
            alert("La estrella seleccionada es: " + $(this).val());
            puntaje = $(this).val();
        });
        
        $("#buttonComPun").click(function(){
            alert("El valor de la estrella seleccionada es: " + puntaje);
            com = $("#nuevoCom").val();
            alert("El valor del comentario ingresado es: "+ com);
            inicio = 0;
            cargarComentarioYPuntaje();
        });
        
    }).fail(function(){
        alert('error!')
    });
}

$(document).ready(function(){
    let params = new URLSearchParams(location.search);
    juegoId = params.get('juegId');
    alert("Cargue la web: ");
    cargarComentarioYPuntaje();
});

