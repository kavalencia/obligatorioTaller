var pagina = 0;
var texto = '';
var comId = 0;
var borrar = 0;
var puntaje = 0;
var com = '';
var juegoId = 0;
var inicio = 1;



function insertarYRefrescarComentarios(){
    $.ajax({
       url: "comentariosJuegoPaginados.php",
       data: {
           juegoId: juegoId,
           com: com,
           puntaje: puntaje,
           inicio: inicio
       },
       dataType: "html"
    }).done(function(html){
        $("#comentariosJuegoPagina").html(html);
         listeners();
    }).fail(function(){
        alert('error!')
    });
}


function borrarYRefrescarComentarios(){
    $.ajax({
       url: "comentariosJuegoPaginados.php",
       data: {
           texto: texto,
           juegoId: juegoId,
           comId: comId,
           borrar: borrar
       },
       dataType: "html"
    }).done(function(html){
        $("#comentariosJuegoPagina").html(html);
        listeners();
    }).fail(function(){
        alert('error!')
    });
}

function cargarPaginaComentarios(){
    $.ajax({
       url: "comentariosJuegoPaginados.php",
       data: {
           pag: pagina,    
           texto: texto,
           juegoId: juegoId,
           comId: comId
       },
       dataType: "html"
    }).done(function(html){
        $("#comentariosJuegoPagina").html(html);
        listeners();
    }).fail(function(){
        alert('error!')
    });
}

function listeners(){
     $("#buscar").click(function(){
        texto = $("#texto").val();
        pagina = 0;
        cargarPaginaComentarios();
    });
    
    $("#texto").on('keyup', function(){
        texto = $("#texto").val();
        pagina = 0;
        cargarPaginaComentarios();
    });
    $(".botonBorrar").click(function(){
        borrar = 1;
        juegoId = this.getAttribute("data-juegoid");
        comId = this.getAttribute("data-comid");
        borrarYRefrescarComentarios();
        borrar = 0;
    })
        
    $("#anterior").click(function(){
        pagina -= 1;
        cargarPaginaComentarios();
    });
        
    $("#siguiente").click(function(){
        pagina += 1;
        cargarPaginaComentarios();
    });
    $("#buttonComPun").click(function(){
        com = $("#nuevoCom").val();
        inicio = 0;   
        insertarYRefrescarComentarios();
    });
    $("input[name=estrellas]").click(function () {    
        puntaje = $(this).val();
    });
}


$(document).ready(function(){
    pagina = 0;
    let params = new URLSearchParams(location.search);
    juegoId = params.get('juegId');
    cargarPaginaComentarios();
});

