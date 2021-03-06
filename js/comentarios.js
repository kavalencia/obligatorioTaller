var pagina = 0;
var texto = "";
//var borrar = 0;
//var juegoId = 0;
//var comId = 0;

function cargar(){
    $.ajax({
       url: "comentariosPaginados.php",
       data: {
           pag: pagina,
           texto: texto//,
           //borrar: borrar,
           //juegoId: juegoId,
           //comId: comId
       },
       dataType: "html"
    }).done(function(html){
        $("#contenedorComentarios").html(html);
        
        /*$("#botoncom"+$("#comId").val()).click(function(){
                borrar = 1;
                comId = $("#comId").val();
                juegoId = $("#juegoId").val();
                //let params = new URLSearchParams(location.search);
                //juegoId = params.get('juegId');
                cargar();
                borrar = 0;
            });
            }
        */
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

