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
            puntaje = $(this).val();
        });
        
        $("#buttonComPun").click(function(){
            com = $("#nuevoCom").val();
            inicio = 0;
            cargarComentarioYPuntaje();
            cargarComentariosJuego();
        });
        
    }).fail(function(){
        alert('error!')
    });
}

$(document).ready(function(){
    let params = new URLSearchParams(location.search);
    juegoId = params.get('juegId');
    cargarComentarioYPuntaje();
});

