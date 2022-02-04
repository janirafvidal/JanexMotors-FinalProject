onload = function() {

    // Calendar.setup({
    //     inputField: "cita_fecha",
    //     ifFormat:   "%d / %m / %Y",
    //     button:     "selector"
    //   });

    this.document.getElementById("enviar").onclick = showData

}

function showData(event){
    let name = document.getElementById("cita_nombre").value
    let date = document.getElementById("cita_fecha").value
    let mail = document.getElementById("cita_mail").value
    let phone = document.getElementById("cita_telf").value
    let radio = document.getElementById("cita_horario")
    // let radValue

    // for (i=0; i < radio.length; i++) {
    //     if (radio[i].checked) {
    //        radValue = radio[i].value
    //     }
    // }
    
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

        alert(name + " has solicitado una cita el día " 
        + date +" por la " + radio.options[radio.selectedIndex].text)
    }

    }


