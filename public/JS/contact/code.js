onload = function() {

    this.document.getElementById("enviar").onclick = check
    this.document.getElementById("msg").onkeypress = limitChar
    this.document.getElementById("borrar").onclick = res

}

function res(){
    document.getElementById("form").reset()
}

function limitChar(event){

    if(this.value.length >= 200){
        event.preventDefault()
    }

}

function check(event){

    let name = document.getElementById("name").value
    let telf = document.getElementById("telf").value
    let mail = document.getElementById("mail").value
    let city = document.getElementById("city").value
    
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
        document.getElementById("form").reset()
        location.href = '/'
        
    }


}