$(document).ready(function() {

  $("#form").validate({
      rules: {
        nombre: {
          required: true,
          minlength: 2,
          maxlength: 5
        }
      },
      messages: {
        nombre:{
          required: "Campo obligatorio",
          minlength: "El nombre debe contener 'más de 2 caracteres",
          maxlength: "El nombre no debe contener más de 5 caracteres" 
        }
      }
    }
  );

  $("#btn").on("click", function(ev){
    ev.preventDefault();

    if($("#form").valid()){

      $.ajax({
        url: 'rpc/rpc.php',
        type: 'post',
        data: {
          nombre: $("#nombre").val()
        }
      })
      .done(function( msg ) {
        $("#mensaje").html(msg);
        $("#ventana-modal")..modal('hide');
      })
      .fail(function(jHttp, textStatus, errorThrown) {
        $("#mensaje").html("Error: " + textStatus + ". " + errorThrown);
      })
      .always(function() {
        console.log("complete");
      });
    }
  })

  $('#myModal').on('hidden.bs.modal', function (e) {
    $("#form")[0].reset();
  })
});