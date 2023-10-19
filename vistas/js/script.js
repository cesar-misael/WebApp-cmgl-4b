$("#email").change(function(){
    var email = $(this).val();
    //console.log("tu email es:", email);
    var datos = new FormData();
    datos.append("validarEmail", email);

    $.ajax({
        url: "ajax/formularios.ajax.php",
        method: "POST",
        data: datos,
        Cache: false,
        contentType: false,
        proccesData: false,
        dataType: "JSON",
        succes: function(respuesta){
            //console.log("Contenido de repuesta: ", respuesta);
            if (respuesta){
                $("#email"). val("");
                $("#email").after(`
                <div class = "alert alert-warning">
                    <b>ERROR:</b>
                    ¡EL CORREO YA EXISTE EN LA BD! INGRESE OTRO DIFERENTE.
                </div>`
                );
            }
        }

    });
})