var pagina = 0;
var texto = "";

function cargar(){
    $.ajax({
       url: "comentariosPaginados.php",
       data: {
           pag: pagina,
           texto: texto
       },
       dataType: "html"
    }).done(function(html){
        $("#contenedorComentarios").html(html);
        
        $("#anterior").click(function(){
            pagina -= 1;
            cargar();
        });
        
        $("#siguiente").click(function(){
            pagina += 1;
            cargar();
        });
        
    }).fail(function(){
        alert('error!')
    });
}

$(document).ready(function(){
    //$(".revisionComentarios").click(function(){
    //    pagina = 0;
    //    cargar();
    //});
    
    $("#buscar").click(function(){
        texto = $("#texto").val();
        pagina = 0;
        cargar();
    });
    
    $("#texto").on('keyup', function(){
        texto = $("#texto").val();
        pagina = 0;
        cargar();
    });
    
    pagina = 0;
    cargar();
});

