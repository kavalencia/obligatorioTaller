var pagina = 0;
var texto = "";

function cargarJuegos(){
    $.ajax({
       url: "juegosPaginados.php",
       data: {
           pag: pagina,
           texto: texto
       },
       dataType: "html"
    }).done(function(html){
        $("#contenedorJuegos").html(html);
        
        $("#anterior").click(function(){
            pagina -= 1;
            cargarJuegos();
        });
        
        $("#siguiente").click(function(){
            pagina += 1;
            cargarJuegos();
        });
        
    }).fail(function(){
        alert('error!');
    });
}

$(document).ready(function(){
    
    $("#buscar").click(function(){
        texto = $("#texto").val();
        pagina = 0;
        cargarJuegos();
    });
    
    $("#texto").on('keyup', function(){
        texto = $("#texto").val();
        pagina = 0;
        cargarJuegos();
    });
   
    cargarJuegos();
});
