params = "url=amazon.com/gp/aw" // parametros a enviar al server
request = new ajaxRequest() // objeto Ajax request
request.open("POST", "rpc/urlpost.php", true) // enviar por POST a urlpost.php asincrono
request.setRequestHeader("Content-type",
  "application/x-www-form-urlencoded") // setear cabeceras
request.setRequestHeader("Content-length", params.length)
request.setRequestHeader("Connection", "close")

// la funcion callback que será llamada cada vez que readyState cambia.
request.onreadystatechange = function(){
  if (this.readyState == 4) { // 4 = completed
    if (this.status == 200) { // 200 = success
      if (this.responseText != null) {
        document.getElementById('info').innerHTML = this.responseText
      }
      else alert("Ajax error: No data received")
    }
    else alert( "Ajax error: " + this.statusText)
  }
}

// Se envía la llamada al servidor con los parametros
request.send(params)


function ajaxRequest() {
  try {
    var request = new XMLHttpRequest()
  } catch(e1) {
    try {
      request = new ActiveXObject("Msxml2.XMLHTTP")
    } catch(e2) {
      try {
        request = new ActiveXObject("Microsoft.XMLHTTP")
      } catch(e3) {
        request = false
      }
    }
  }
  return request
}