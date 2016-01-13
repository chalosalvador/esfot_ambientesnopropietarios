$(document).ready(function() {

  $( "form#contacto" ).validate({
     rules: {
        nombre: {
          required: true,
          minlength: 2
        },
        email: {
          email: true,
          required: true,

        },
        mensaje: {
          minlength: 3,
          maxlength: 400,
          required: true
        },
    },
    messages: {
    nombre: {
      required: "Ingresa tu nombre.",
      minlength: $.validator.format("Al menos {0} caracteres requeridos")
    },
    email: {
          email: "Ingrese un email válido.",
          required: "Este campo es obligatorio.",
        },
  }
  });

  $("#btn-enviar").on('click', function(event) {
    event.preventDefault();
    
    if( $( "form#contacto" ).valid() ) {  
      var noticias = $('#noticias').is(':checked') ? 1 : 0;
      $.ajax({
        url: 'rpc/procesar.php',
        type: 'POST',
        // dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
        data: {
          nombre: $('#nombre').val(),
          email: $('#email').val(),
          mensaje: $('#mensaje').val(),
          noticias: noticias
        },
      })
      .done(function(msg) {
        console.log("success");
        $('#success').html(msg);
      })
      .fail(function(jqXHR, textStatus, errorThrown) {
          console.log("fail: " + textStatus + " " + errorThrown);
          $("#error").html(textStatus + " " + errorThrown );
        })
      .always(function() {
        console.log("complete");
        $btn.button('reset');
      });
     } 
  });
  // $("#btn-enviar").on("click", function(){

  //   if( $( "form#contacto" ).valid() ) {   
  //      var $btn = $(this).button('loading');
  //     var noticias = $("form#contacto #noticias").is(":checked") ? 1 : 0;
  //     $.ajax({
  //       url: 'rpc/procesar.php',
  //       type: 'post',
  //       // dataType: 'json',
  //       data: {"nombre": $("form#contacto #nombre").val(),
  //             "email": $("form#contacto #email").val(),
  //             "noticias": noticias,
  //             "mensaje": $("form#contacto #mensaje").val()}
  //     })
  //     .done(function(msg) {
  //       console.log("success");
  //       $("#success").html(msg)
  //       $('#contact-form').modal('hide')
  //     })
  //     .fail(function(jqXHR, textStatus, errorThrown) {
  //       console.log("fail: " + textStatus + " " + errorThrown);
  //       $("#error").html(textStatus)
  //     })
  //     .always(function() {
  //       console.log("complete");
  //       $btn.button('reset');
  //     });
  //   }
    
  // })
  $("#contact-form").on("hide.bs.modal", function(){
    $('#contacto')[0].reset();
  })
});