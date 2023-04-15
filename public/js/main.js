$(document).ready(function () {

        $.ajax({
            type: "POST",
            url: "http://localhost/mvc-demo/libs/route.php",
            data:{
                op: 'http://localhost/mvc-demo/'
            },
            dataType: 'json',
            success: function (data) {
                //console.log(data);
                var menu1 = "";
                $.each(data, function (index, value) { 
                    menu1 += '<li class="mb-3"><a class="hover:text-blue-600" href="'+value.href+'">'+value.texto+'</a></li>';
                });
                $("#aside_menu").html(menu1);

            },
            error: function (jqXHR, estado, error) {
                console.log(estado);
                console.log(error);
            },
            complete: function (data) {
            // console.log(data);
            }
        });

    /* $.ajax({
        type: "POST",
        url: "http://localhost/mvc-demo/libs/route.php",
        data:{
            op: 'lluvia de ideas'
        },
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $("#hola").html(data);

        },
        error: function (jqXHR, estado, error) {
            console.log(estado);
            console.log(error);
        },
        complete: function (data) {
           // console.log(data);
        }
    }); */
    

    /* $.ajax({
        type: "POST",
        url: "http://localhost/mvc-demo/controller/mainController.php",
        data: {
            op: 'preguntas'
        },
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $("#load").html(data)
        },
        error: function (jqXHR, estado, error) {
            console.log(estado);
            console.log(error);
        },
        complete: function (data) {
           // console.log(data);
        }
    }); */

});

   







/* $.getJSON("http://localhost/mvc-demo/controller/indexController.php/read")
  .done(function( json ) {
    console.log( "JSON Data: " + json.users[ 3 ].name );
  })
  .fail(function( jqxhr, textStatus, error ) {
    var err = textStatus + ", " + error;
    console.log( "Request Failed: " + err );
});





 var titulo1 = "";
            var contenido1 = "";
            var img1 = "";
            var titulo2 = "";
            var contenido2 = "";

        $.each(data, function (index, value) { 
            //console.log(index +''+ value.Titulo);
            if (index == 0) {
                titulo1 +=  value.Titulo;
                contenido1 +=  value.Contenido;  
                img1 +=  value.Img;
            }
            if (index == 1) {
                titulo2 +=  value.Titulo;
                contenido2 +=  value.Contenido;  
            }
        });

        $(".Titulo1").text(titulo1);
        $(".Contenido1").text(contenido1);
        $(".img1").text(img1);
        $(".Titulo2").text(titulo2);
        $(".Contenido2").text(contenido2);s
*/

