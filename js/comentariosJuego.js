var pagina = 0;
var texto = '';
var juegoId = 0;

function cargarComentariosJuego(){
    $.ajax({
       url: "comentariosJuegoPaginados.php",
       data: {
           pag: pagina,
           texto: texto,
           juegoId: juegoId,
       },
       dataType: "html"
    }).done(function(html){
        $("#comentariosJuegoPagina").html(html);
        
        $("#anterior").click(function(){
            pagina -= 1;
            cargarComentariosJuego();
        });
        
        $("#siguiente").click(function(){
            pagina += 1;
            cargarComentariosJuego();
        });
        
    }).fail(function(){
        alert('error!')
    });
}

$(document).ready(function(){
   
    $("#buscar").click(function(){
        texto = $("#texto").val();
        pagina = 0;
        cargarComentariosJuego();
    });
    
    $("#texto").on('keyup', function(){
        texto = $("#texto").val();
        pagina = 0;
        cargarComentariosJuego();
    });
    
    pagina = 0;
    let params = new URLSearchParams(location.search);
    juegoId = params.get('juegId');
    cargarComentariosJuego();
});

