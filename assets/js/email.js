$(function(){

	// formulario de contacto - home 

	$("#contactHome").click(function(){
		
		var formData = new FormData($('#formContactHome')[0]);

		if(validaciones('Home'))
            send_request(formData, 'Home');
		
	});


    // formulario de contacto - footer

    $("#contactFooter").click(function(){

        var formData = new FormData($('#formContactFooter')[0]);

        if(validaciones('Footer'))
            send_request(formData, 'Footer');

    });

});


function send_request(formData, divResponse){

    $.ajax({
        url: base_url+"index.php/email",
        type: "POST", 
        dataType: 'json',                      
        data: formData,   
        cache : false,
        processData: false,
        contentType: false,
        beforeSend: function(){
            $("#response"+divResponse).html('<i class="fa fa-gear fa-spin fa-2x"></i>');
            $("#contact"+divResponse).addClass("hide");
        },                 
        success: function(data){
            $("#contact"+divResponse).removeClass("hide");
            $("#response"+divResponse).empty();
            swal("Mensaje enviado", "Muchas gracias, en breve nos comunicaremos con usted","success");
            console.log(data);
        },
        error: function (data){
            swal("Error", "Ocurrio un error al enviar el mensaje, intente mas tarde...","warning");
        }
    });

}


function validaciones(seccion){

    if($("#nombre"+seccion).val()==""){
        swal("Oops", "Debes capturar tu nombre en el formulario","warning");
        return false;
    }

    if($("#telefono"+seccion).val()==""){
        swal("Oops", "Por favor dejanos tu telefono para poder comunicarnos contigo","warning");
        return false;
    }

    return true;

}