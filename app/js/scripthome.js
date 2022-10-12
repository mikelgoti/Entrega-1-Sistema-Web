function masInfo()
{
var d = document.getElementById('desplegableMasInfo')

    if(d.style.display === "none"){
        d.style.display = "block";
    }
    else{
        d.style.display = "none";
    }
}

function actualizar(div,input){
    var d = document.getElementById(`${div}`)
    var i = document.getElementById(`${input}`)

    if(d.style.display === "block"){
        d.style.display = "none";
        i.style.display = "block";
    }
    else{
        i.style.display = "none";
        d.style.display = "block";
    }
}

/**
 * EXPRESIONES REGULARES CONSTANTES PARA VALIDAR LOS CAMPOS SEGUN EL PDF DEL TRABAJO
 * EXPRESION REGULAR = ER
 */
const expresiones = {
    usuario: /^[a-zA-Z0-9]{4,16}$/,/**ER= minusculas mayusculas digitos rango(4-16)*/
    email: /^[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}$/,/**ER=*/
    nombre: /^[a-zA-Z]{4,16}$/,/**ER= minusculas mayusculas rango(4-16)*/
    apellido: /^[a-zA-Z]{4,16}$/,/**ER= minusculas mayusculas rango(4-16)*/
    apellido1: /^[a-zA-Z]{4,16}$/,/**ER= minusculas mayusculas rango(4-16)*/
    telefono: /^[0-9]{9}$/,/**ER= digitos rengo(9) */
    fecha: /^[0-9]{4}-[0-9]{2}-[0-9]{2}$/,
    dni: /^[0-9]{8}-[a-zA-Z]{1}$/,
    password: /^[a-zA-Z0-9]{5,20}$/
}

/**
 * VARIABLES MENU
 */

const pni = document.querySelectorAll('#perfil_nuevo_input');
let btn_perfil = document.getElementById('perfil_cambio_btn');

pni.forEach( i => 
    {
        i.addEventListener('keyup',campo);
        i.addEventListener('blur',campo);
    })

function campo(e)
{
    console.log(e.target.name)
    switch(e.target.name){
        case "usuario":
            validar(expresiones.usuario,e.target,'usuario');
        break;
        
        case "email":
            validar(expresiones.email,e.target,'email')
        break;

        case "nombre":
            validar(expresiones.nombre,e.target,'nombre')
        break;

        case "apellido":
            validar(expresiones.apellido,e.target,'apellido')
        break;

        case "apellido1":
            validar(expresiones.apellido1,e.target,'apellido1')
        break;

        case "telefono":
            validar(expresiones.telefono,e.target,'telefono')
        break;
        
        case "fecha":
            validar(expresiones.fecha,e.target,'fecha')
        break;

        case "dni":
            validar(expresiones.dni,e.target,'dni')
        break;

        case "password":
            validar(expresiones.password,e.target,'password');
        break;
    }
}

const validar = (exp, input, c) => {

    const param = document.getElementById(`campo__input-error-${c}`);

    if(exp.test(input.value)){
        document.getElementById(`grupo__${c}`).classList.remove('grupo_registrar-mal');
        document.getElementById(`grupo__${c}`).classList.add('grupo_registrar-bien');
        
            if(c === "fecha"){
                validarFecha(input.value)
            }
            else if(c === "dni"){
                validarLetraDni(input.value)
            }
    }
    else{
        document.getElementById(`grupo__${c}`).classList.remove('grupo_registrar-bien');
        document.getElementById(`grupo__${c}`).classList.add('grupo_registrar-mal');
    }
}

function validarLetraDni(dni){
    var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 
    'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

    var letra = dni.substr(-1)
    var dniSinLetra = dni.substr(0,dni.length-1)
    var dniSinGuion = dniSinLetra.substr(0,dniSinLetra.length-1)
    var letraCalculada = letras[dniSinGuion % 23]
    
    if(letraCalculada === letra){
        document.getElementById('grupo__dni').classList.remove('grupo_registrar-mal');
        document.getElementById('grupo__dni').classList.add('grupo_registrar-bien');
    }
    else{
        document.getElementById('grupo__dni').classList.remove('grupo_registrar-bien');
        document.getElementById('grupo__dni').classList.add('grupo_registrar-mal');
    }

}