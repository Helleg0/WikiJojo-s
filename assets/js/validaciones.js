function registrarse(){
    // se capturan los valores de los campos del formulario de registro
    var datos = new FormData(document.forms.namedItem("form-registro"));
    // se crea una instancia de ajax
    var ajax = new XMLHttpRequest();
    // se abre comunicación con el archivo destino
    ajax.open("POST", "backend/registrar.php", true)
    ajax.onload = function(event){
        var obj = JSON.parse(ajax.response);
        console.log(obj);
        if(obj.ok){
            document.getElementById("errorEmail2").style.display = "none";
            location.href = "iniciar-sesion.php";
           
        }else if(obj.msg == "El email ya esta en uso"){
            document.getElementById("errorEmail2").style.display = "block";
            
        }
    }
    ajax.send(datos);
}

function login(){
    var datos = new FormData(document.forms.namedItem("form-login"));
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "backend/login.php", true)
    ajax.onload = function(event){
        var obj = JSON.parse(ajax.response);
        console.log(obj);
        if(obj.ok){
            document.getElementById("errorEmail3").style.display = "none";
            document.getElementById("errorPassword3").style.display = "none";
            location.href = "index.php";
        }else if(obj.msg == "Login fallido"){
            document.getElementById("errorEmail3").style.display = "block";
            document.getElementById("errorPassword3").style.display = "block";
        }
    }
    ajax.send(datos);
}

function subirArchivos(){
    var datos = new FormData(document.forms.namedItem("form-registro-personaje"));
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "backend/subirImagen.php", true)
    ajax.onload = function(event){
        var obj = JSON.parse(ajax.response);
        console.log(obj);
        if(obj.ok){
            console.log("Se subio el archivo")
        }
    }
    ajax.send(datos);
}

function registroPersonaje(){
    var datos = new FormData(document.forms.namedItem("form-registro-personaje"));
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "backend/registrarPersonaje.php", true)
    ajax.onload = function(event){
        var obj = JSON.parse(ajax.response);
        console.log(obj);
        if(obj.ok){
            location.href = "index.php";
        }else if(obj.msg == "Error al subir el archivo"){
 
        }
    }
    ajax.send(datos);
}

function validarCamposLogin(){
    validarEmail();
    validarPassword();

    if(validarEmail() && validarPassword()){
        login();
    }
}

function validarCampos(){
    validarNombres();
    validarEmail();
    validarPassword();

    if(validarNombres() && validarEmail() && validarPassword()){
        registrarse();
    }

}

function validarCamposRegistroP(){
    validarNombrePersonaje();
    validarExtension();
    validarTamaño();
    validarImg();

    if(validarNombrePersonaje() && validarExtension() && validarTamaño() && validarImg()){
        registroPersonaje();
        subirArchivos();
        console.log("desde vcrp")
    }
}

function validarNombres(){
    nombres = document.getElementById("nombres").value;
    const regExp = /^[a-zA-Z0-9]+([._]?[a-zA-Z0-9]+)*$/; 
    
    if(nombres.match(regExp) != null){
        document.getElementById("errorNombres").style.display = "none";
        return true;
    } else { 
        document.getElementById("errorNombres").style.display = "block";
        return false;
    }
}

function validarEmail(){
    email = document.getElementById("email").value;
    const regExp = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;    
    
    if(email.match(regExp) != null){
        document.getElementById("errorEmail").style.display = "none";
        return true;
    } else { 
        document.getElementById("errorEmail").style.display = "block";
        return false;
    }
}

function validarPassword(){
    password = document.getElementById("password").value;
    const regExp = /(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;    
    
    console.log(password.length);
    if(password.match(regExp) != null){
        if(password.length > 7 && password.length < 17){
            document.getElementById("errorPassword1").style.display = "none";
            document.getElementById("errorPassword2").style.display = "none";
            return true;
        } else {
            document.getElementById("errorPassword2").style.display = "block";
            return false;
        }        
    } else { 
        document.getElementById("errorPassword1").style.display = "block";
        return false;
    }
    
}

function validarExtension(){
    fileInput = document.getElementById('file');
    filePath = fileInput.value;
    console.log(filePath);
    allowdExtensions = /(.jpg|.jpeg|.png)$/i;
    if(!allowdExtensions.exec(filePath)){
       document.getElementById("errorFile").style.display = "block";
       return false; 
    }else{
        document.getElementById("errorFile").style.display = "none";
        return true;
    }

}

function validarTamaño(){
    fileTamaño = document.getElementById('file').files[0].size;
    if(fileTamaño <= 1000000){
        document.getElementById("errorFile2").style.display ="none";
        return true;
    }else{
        document.getElementById("errorFile2").style.display="block";
        return false;
    }
}

function validarNombrePersonaje(){
    nombres = document.getElementById('nombres').value;
    const regExp = /^[a-zA-Z ÁÉÍÓÚáéíóú]+\S{2,40}$/i;    
    console.log(nombres);
    if(nombres.match(regExp) != null){
        document.getElementById("errorNombres2").style.display = "none";
        return true;
    } else { 
        document.getElementById("errorNombres2").style.display = "block";
        return false;
    }
}

function validarImg(){
    img = document.getElementById('file');
    if(img == ""){
        document.getElementById("errorFile3").style.display = "block";
        return false;
    }else{
        document.getElementById("errorFile3").style.display = "none";
        return true;
    }
}
