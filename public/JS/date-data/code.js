onload = function() {

    Calendar.setup({
        inputField: "fecha",
        ifFormat:   "%d / %m / %Y",
        button:     "selector"
      });

    this.document.getElementById("enviar").onclick = showData

}

function showData(event){
    let name = document.getElementById("name").value
    let date = document.getElementById("fecha").value
    let mail = document.getElementById("mail").value
    let phone = document.getElementById("phone").value
    let radio = document.getElementsByName("horario")
    let radValue

    for (i=0; i < radio.length; i++) {
        if (radio[i].checked) {
           radValue = radio[i].value
        }
    }
    
    if (name == "" || date == "" || mail == "" || phone == ""){
        alert("Todos los campos del formulario son obligatorios, por favor rellénelos")
        event.preventDefault()
    }else if (!(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(mail)) ){
        alert("El campo MAIL tiene un formato incorrecto")
        event.preventDefault()

    }else if (!(/^\d{9}$/.test(phone)) ){
        alert("El campo TELEFONO debe tener 9 digitos y no tener espacios ni guiones")
        event.preventDefault()

    }else{

        alert(document.getElementById("name").value +" has solicitado una cita el día " 
        +document.getElementById("fecha").value +" por la " +radValue)
    
        document.getElementById("form").reset()
        location.href = 'index.html'
    }

    }


