$(document).ready(function(){

 $("form#usuario").validate({
 	rules :{

 		nombre: {
 			required:true,
 			minlength: 2

 		},

 		email: {
 			required:true,
 			email:true
 			

 		},

 		telefono :{
 			required:true,
 			minlength: 9

 		},

 		contrasenia: {

 			required:true,
 			minlength: 4
 		},

        contrasenia2:{

            required:true,
        	equalTo:"#contrasenia"
        },

        usuario :{

        	required:true,
        	remote: {

        url: "rpc/validar_usuario.php",
        type: "post",
        data:{
         
         usuario: function(){
            return $('#txtusuario').val();
          }

        }


        	}
    }


 	},

messages:{

	nombre:{

		required:"Es necesario ingresar tu nombre",
		 minlength: $.validator.format("Al menos {0} caracteres requeridos")
	},

	email:{

		required:"Es necesario ingresar un email , para completar el registro",
		email: "Por favor , Ingrese un email valido"
	},

	telefono :{

		required:"Por favor , Ingrese su numero telefonico",
		minlength:$.validator.format("Al menos {0} caracteres requeridos")
	},
	contrasenia:{

		required:"Es necesario que escriba una contraseña para el registro",
		minlength: $.validator.format("Al menos {0} caracteres requeridos")
	},

	contrasenia2:{

		required: "Por favor repita la contraseña , para su confirmacion.",
		equalTo: "La contraseña debe ser igual a la que ingreso antes"
	},

	usuario: {

		required:"Por favor ingrese el nombre de usuario, para continuar con el registro",
		remote:"El usuario ya esta registrado , intente con otro"
	}


}

 });

$('#btnRegistrar').on('click',  function(event) {
  event.preventDefault();
  if($('form#usuario').valid())
  {
    
    $.ajax({
      url: 'rpc/procesar.php',
      type: 'post',
      data: {
        nombre: $('form#usuario #txtnombre').val(),
        email: $('form#usuario #txtemail').val(),
        telefono:$('form#usuario #txtfono').val(),
        direccion:$('form#usuario #txtdir').val(),
        usuario:$('form#usuario #txtusuario').val(),
        contrasenia:$('form#usuario #contrasenia').val()
},
    })
    .done(function(msg) {
      if(msg == "Mensaje enviado con éxito.")
        $('#mensaje').addClass('alert-success');
      else
        $('#mensaje').addClass('alert-danger');

      $('#mensaje').html(msg);
      console.log("success");
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      // $('#usuario').reset();
      console.log("complete");
    });
    


  }


});


$('#txtprovincia').on('change', function(event) {
  event.preventDefault();
  
  $.ajax({
    url: 'rpc/get_cantones.php',
    type: 'POST',
    data: {provincia: $('#txtprovincia').val()},
  })
  .done(function(msg) {
    $('#txtcanton').html(msg);
    $('#txtparroquia').html('<option value="">Seleccione...</option>');
    console.log("success");
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
  
});


$('#txtcanton').on('change', function(event) {
  event.preventDefault();
  
  $.ajax({
    url: 'rpc/get_parroquias.php',
    type: 'POST',
    data: {canton: $('#txtcanton').val()},
  })
  .done(function(msg) {
    $('#txtparroquia').html(msg);
    console.log("success");
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
  
});


// $('#tabla_usuarios tr td').each(function(index, el) {
//   $(el).on('click', function(event) {
//     event.preventDefault();
//     $(this).html('<input type="text" value="' + $(this).html() + '">');

//     $(this).parent().html('<button id="guardar_' + $(this).parent().attr('id') + '">Guardar cambios</button>')

//     $('guardar_' + $(this).parent().attr('id')).on('click', function(event) {
//       event.preventDefault();
//       $.ajax({
//         url: 'rpc/actualizar.php',
//         type: 'default GET (Other values: POST)',
//         dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
//         data: {param1: 'value1'},
//       })
//       .done(function() {
//         console.log("success");
//       })
//       .fail(function() {
//         console.log("error");
//       })
//       .always(function() {
//         console.log("complete");
//       });
      
//     });
//   });
// });

})
	