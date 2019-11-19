function validaD() {
    nombre = document.getElementById("nombre").value;
    correo = document.getElementById("email").value;
    telefono = document.getElementById("telefono").value;
    mensaje = document.getElementById("mensaje").value;
    
    if(nombre.length > 3){
        if (correo.indexOf("@") >= 0) {
            if (telefono.length == 10) {
                if (mensaje.length != 0) {
                    alert("En breve nos cantactaremos con usted");
                } else {
                    document.getElementById("msg-error").innerHTML = "Introduce un mensaje";
                }
            } else {
                document.getElementById("msg-error").innerHTML = "El telefono debe contener 10 digitos";
            }
        } else {
            document.getElementById("msg-error").innerHTML = "Introduce correo valido";
        }
    }else{
        document.getElementById("msg-error").innerHTML = "El nombre debe tener mas de 3 caracteres";
    }

}