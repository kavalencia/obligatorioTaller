var pagina = "0";
var texto = "";
var orden = "normal";
var genero = "0";
var consola = "0";

function cargarJuegos(){
    $.ajax({
       url: "juegosPaginados.php",
       data: {
           pag: pagina,
           texto: texto,
           orden: orden,
           genero: genero,
           consola: consola
       },
       dataType: "html"
    }).done(function(html){
        $("#contenedorJuegos").html(html);
        
        $("#anterior").click(function(){
            pagina -= 1;
            orden = $("#orden").val();
            genero = $("#genero").val();
            consola = $("#consola").val();
            cargarJuegos();
        });
        
        $("#siguiente").click(function(){
            pagina += 1;
            orden = $("#orden").val();
            genero = $("#genero").val();
            consola = $("#consola").val();
            cargarJuegos();
        });
        
    }).fail(function(){
        alert('error!');
    });
}

$(document).ready(function(){
    $(".revisionComentarios").click(function(){
        pagina = 0;
        orden = $("#orden").val();
        genero = $("#genero").val();
        consola = $("#consola").val();
        cargarJuegos();
    });
    
    $("#orden").click(function(){
        pagina = 0;
        orden = $("#orden").val();
        genero = $("#genero").val();
        consola = $("#consola").val();
        cargarJuegos();
    });
    
    $("#genero").click(function(){
        pagina = 0;
        orden = $("#orden").val();
        genero = $("#genero").val();
        consola = $("#consola").val();
        cargarJuegos();
    });
    
    $("#consola").click(function(){
        pagina = 0;
        orden = $("#orden").val();
        genero = $("#genero").val();
        consola = $("#consola").val();
        cargarJuegos();
    });
     
    $("#buscar").click(function(){
        pagina = 0;
        texto = $("#texto").val();
        orden = $("#orden").val();
        genero = $("#genero").val(); 
        consola = $("#consola").val();
        cargarJuegos();
    });
    
    $("#texto").on('keyup', function(){
        pagina = 0;
        texto = $("#texto").val();
        orden = $("#orden").val();
        genero = $("#genero").val();
        consola = $("#consola").val();
        cargarJuegos();
    });

  cargarJuegos();
});
