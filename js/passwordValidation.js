var upperCase = new RegExp("[A-Z]");
var lowerCase = new RegExp("[a-z]");
var numbers = new RegExp("[0-9]");

$(document).ready(function () {
    var porcentaje = 0;

    $("#clave").on('keyup', function () {
        porcentaje = 0;
        
        var textInput = $(this).val();
        var tieneOcho = textInput.length > 7;
        var containsUpperCase = textInput.match(upperCase);
        var containsLowerCase = textInput.match(lowerCase);
        var containsNumber = textInput.match(numbers);

        if (tieneOcho) {
            if (textInput.length > 10) {
                //+20
                porcentaje = porcentaje + 20;
            }
            if (containsUpperCase && containsLowerCase) {
                //+40%
                porcentaje = porcentaje + 40;             
            }
            if ((containsUpperCase || containsLowerCase) && containsNumber) {
                //+40%
                porcentaje = porcentaje + 40;
            }
        }
        
        $('#porcNum').html("   "+porcentaje+"%");
        $('#porc').prop("value",porcentaje);
    });


});
