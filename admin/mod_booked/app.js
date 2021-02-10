$(obtener_registros());

function obtener_registros(guest) {
    $.ajax({
        url: 'buscar.php',
        type: 'POST',
        dataType: 'html',
        data: { guest: guest },
    })

    .done(function(resultado) {
        $("#tabla_resultado").html(resultado);
    })
}

$(document).on('keyup', '#busqueda', function() {
    var valorBusqueda = $(this).val();
    if (valorBusqueda != "") {
        obtener_registros(valorBusqueda);
    } else {
        obtener_registros();
    }
});