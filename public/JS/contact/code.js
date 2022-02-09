onload = function() {

    this.document.getElementById("enviar").onclick = check
    this.document.getElementById("mensaje_mensaje").onkeypress = limitChar

}


function limitChar(event){

    if(this.value.length >= 200){
        event.preventDefault()
    }

}

function check(event){

    let name = document.getElementById("mensaje_nombre").value
    let telf = document.getElementById("mensaje_telf").value
    let mail = document.getElementById("mensaje_mail").value
    let city = document.getElementById("mensaje_ciudad").value
    
    if (name == "" || telf == "" || mail == "" || city == "" ){
        alert("Todos los campos del formulario son obligatorios, por favor rellénelos como corresponde.")
        event.preventDefault()
    }else if (!(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(mail)) ){
        alert("El campo MAIL tiene un formato incorrecto")
        event.preventDefault()

    }else if (!(/^\d{9}$/.test(telf)) ){
        alert("El campo TELEFONO debe tener 9 digitos y no tener espacios ni guiones")
        event.preventDefault()

    }else{
        alert("Mensaje enviado correctamente")
        
    }


}