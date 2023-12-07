document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click", registro);
window.addEventListener("resize", redimensionarPagina);

//Declaración de variables//

var contenedor_login_registro = document.querySelector (".contenedor__login-registro");
var formulario_login =document.querySelector (".formulario__login");
var formulario_registro = document.querySelector (".formulario__registro");
var caja_tras_login =document.querySelector (".caja__tras-login");
var caja_tras_registro = document.querySelector (".caja__tras-registro"); 


function redimensionarPagina() {
    if (window.innerWidth > 850) {
        caja_tras_registro.style.display = "block";
        caja_tras_login.style.display = "block";
    }else{
        caja_tras_registro.style.display = "block";
        caja_tras_registro.style.opacity = "1";
        caja_tras_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_registro.style.display= "none";
        contenedor_login_registro.style.left = "0px";
    }
}

redimensionarPagina();

function iniciarSesion() {
    if (window.innerWidth > 850) {
        formulario_registro.style.display = "none";
        contenedor_login_registro.style.left = "10px";
        formulario_login.style.display = "block";
        caja_tras_registro.style.opacity = "1";
        caja_tras_login.style.opacity = "0";
    }else{
    formulario_registro.style.display = "none";
    contenedor_login_registro.style.left = "0px";
    formulario_login.style.display = "block";
    caja_tras_registro.style.display = "block";
    caja_tras_login.style.opacity = "none";
    }
}

function registro() {
    if (window.innerWidth > 850) {
        formulario_registro.style.display = "block";
        contenedor_login_registro.style.left = "410px";
        formulario_login.style.display = "none";
        caja_tras_registro.style.opacity = "0";
        caja_tras_login.style.opacity = "1";
    }else{
    formulario_registro.style.display = "block";
    contenedor_login_registro.style.left = "0px";
    formulario_login.style.display = "none";
    caja_tras_registro.style.display = "none";
    caja_tras_login.style.display = "block";
    caja_tras_login.style.opacity = "1";
    }
}


