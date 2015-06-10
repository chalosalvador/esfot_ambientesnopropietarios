function validar(form){
  msg_error = ""

  msg_error += validarNombre(form.nombre.value)
  msg_error += validarApellido(form.apellido.value)
  msg_error += validarEdad(form.edad.value)
  msg_error += validarUsuario(form.usuario.value)

  if(msg_error == "") 
    return true;
  else{
    alert(msg_error)
    return false
  }
}

function validarNombre(valor){
  if(valor == "")
    return "Ingrese el nombre.\n"
  
  return ""
}

      function validarApellido(valor){
        if(valor == "")
          return "Ingrese el apellido.\n"
        
        return ""
      }
      
      function validarEdad(valor){
        if(isNaN(valor))
          return "La edad debe ser un número.\n"
        else if(valor < 18 || valor > 110)
          return "La edad debe estar entre 18 y 110.\n"

        return ""
      }

      function validarUsuario(valor){
        if(valor == "")
          return "Ingrese un usuario.\n"
        else if(valor.length < 8 || valor.length > 30)
          return "El usuario debe contener entre 8 y 30 caracteres.\n"

        return ""
      }
