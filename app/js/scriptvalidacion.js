//console.log('FUNCIONA');

/**
 * EXPRESIONES REGULARES CONSTANTES PARA VALIDAR LOS CAMPOS SEGUN EL PDF DEL TRABAJO
 * EXPRESION REGULAR = ER
 */
const expresiones = {
    usuario: /^[a-zA-Z0-9]{1,40}$/,/**ER= minusculas mayusculas digitos*/
    email: /^[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}$/,/**ER=*/
    nombre: /^[a-zA-Z]{1,40}$/,/**ER= minusculas mayusculas*/
    apellido: /^[a-zA-Z]{1,16}$/,/**ER= minusculas mayusculas*/
    apellido1: /^[a-zA-Z]{1,16}$/,/**ER= minusculas mayusculas*/
    telefono: /^[0-9]{9}$/,/**ER= digitos rengo(9) */
    fecha: /^[0-9]{4}-[0-9]{2}-[0-9]{2}$/,
    dni: /^[0-9]{8}-[a-zA-Z]{1}$/,
    password: /^[a-zA-Z0-9]{5,20}$/
}

/**
 * VARIABLES
 */
const r = document.getElementById('campo');
const f = document.querySelectorAll('#campo input');
const boton = document.getElementById('btn_regis');

/**
 * LISTENERS
 * CADA VEZ QUE SE CLICKE O SE APRIETE UNA TECLA REGISTRA LLAMANDO 
 * A LA FUNCION campo()
 */
f.forEach( i => 
    {
        i.addEventListener('keyup',campo);
        i.addEventListener('blur',campo);
    })

/**
 * FUNCION PARA VALIDAR EL INGRESO DE LAS LETRAS QUE SE VAYAN TECLEANDO CON EL OBJETIVO DE VALIDAR
 * @param {*Input del usuario en el campo de texto de la pagina web} e 
 */
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

        case "password1":
            validar(expresiones.password,e.target,'password1');
            /*validarPassword(e.target);*/
        break;
    }
}
/**
 * 
 * FUNCION PARA VALIDAR LOS CAMPOS EXCEPTO LAS PASSWORDS
 * para evitar repetir codigo en el switch
 * @param {*para validar el input y comprarlo todo el rato con la expresion regular} exp 
 * @param {*input constante del usuario cada tecla que pulsa} input
 * @param {*campo en el grupo de registro. usuario,nombre,etc...} c
 * 
 * PROBLEMA
 * falta algun tipo de animacion al dejar algun campom en blanco. Porque una vez hecho click en un input
 * se queda en rojo ingreses algo o no. Se podria pasar a azul si no tienes datos. 
 * con un else if == nulldatos o algo asi set style: "border: blue;"
 */
const validar = (exp, input, c) => {

    const param = document.getElementById(`campo__input-error-${c}`);

    if(exp.test(input.value)){
        param.style.display = "none";
        document.getElementById(`grupo__${c}`).classList.remove('grupo_registrar-mal');
        document.getElementById(`grupo__${c}`).classList.add('grupo_registrar-bien');
        
            if(c === "fecha"){
                validarFecha(input.value)
            }
            else if(c === "dni"){
                validarLetraDni(input.value)
            }

            else if(c === "password1"){
                validarPassword(input);
            }
            
            switch(c){
                case "usuario":
                    console.log("usuario bien")
                    botonDesbloquear(c,"true")
                break;

                case "nombre":
                    botonDesbloquear(c,"true")
                break;
                
                case "apellido":
                    botonDesbloquear(c,"true")
                break;

                case "apellido1":
                    botonDesbloquear(c,"true")
                break;

                case "email":
                    botonDesbloquear(c,"true")
                break;

                case "telefono":
                    botonDesbloquear(c,"true")
                break;

                case "fecha":
                    botonDesbloquear(c,"true")
                break;

                case "dni":
                    botonDesbloquear(c,"true")
                break;

                case "password":
                    botonDesbloquear(c,"true")
                break;
                
                case "password1":
                    botonDesbloquear(c,"true")
                break;

            }
        }
        else{
            param.style.display = "block";
            document.getElementById(`grupo__${c}`).classList.remove('grupo_registrar-bien');
            document.getElementById(`grupo__${c}`).classList.add('grupo_registrar-mal');
            
            switch(c){
                case "usuario":
                    console.log("usuario mal")
                    botonDesbloquear(c,"false")
                break;

                case "nombre":
                    botonDesbloquear(c,"false")
                break;
                
                case "apellido":
                    botonDesbloquear(c,"false")
                break;

                case "apellido1":
                    botonDesbloquear(c,"false")
                break;

                case "email":
                    botonDesbloquear(c,"false")
                break;

                case "telefono":
                    botonDesbloquear(c,"false")
                break;

                case "fecha":
                    botonDesbloquear(c,"false")
                break;

                case "dni":
                    botonDesbloquear(c,"false")
                break;

                case "password":
                    botonDesbloquear(c,"false")
                break;
            }
        }
    }

    /**
     * CLASE PARA DESBLOQUEAR EL BOTON DE REGISTRAR SOLO CUADNO TODOS LOS CAMPOS ESTEN BIEN INTROPDUCIDOS
     * @param {El campo en el que se introduzcan los datos} campo 
     * @param {El valor booleano que indica si estam bien introducidos o no} valor 
     */
    //VARIABLES PARA GUARDAR EL ESTADO DE LOS CAMPOS
    var usuario = false;
    var nombre = false;
    var apellido = false;
    var apellido1 = false;
    var email = false;
    var telefono = false;
    var fecha = false;
    var dni = false;
    var password = false;
    var password1 = false;

    function botonDesbloquear(campo,valor){
        
        switch(campo){
            case "usuario":
                console.log(valor)
                usuario = valor;
                console.log(usuario)
                break;

                case "nombre":
                nombre = valor;
                break;
                
                case "apellido":
                apellido = valor;
                break;

                case "apellido1":
                apellido1 = valor;
                break;

                case "email":
                email = valor;
                break;

                case "telefono":
                telefono = valor;
                break;

                case "fecha":
                fecha = valor;
                break;

                case "dni":
                dni = valor;
                break;

                case "password":
                    password = valor;
                break;

                case "password1":
                    password1 = valor;
                break;
        }

        if(usuario === "true" && email === "true" && nombre === "true" && apellido === "true" && apellido1 === "true" 
            && telefono === "true" && fecha === "true" && dni === "true" && password === "true" && password1 ==="true"){
                console.log("desblo")
            boton.disabled = false;
            /*agregar clase para que el boton brille*/
            document.getElementById('btn_registrar').classList.add("boton_desbloqueado");
        }
        else{
            console.log("bloqueo")
            boton.disabled = true;
            document.getElementById('btn_registrar').classList.remove("boton_desbloqueado");
        }
    }
/**
 * LA EXPRESION REGULAR DE LA FECHA SOLO VALIDA QUE EL FORMATO SEA CORRECTO
 * ESTA FUNCION VALIDA QUE LA FECHA INTRODUCIDA SEA PLAUSIBLE
 * @param {*recive la fecha completa introducida} fecha 
 */
function validarFecha(fecha){
    console.log("fecha correcta pendiente de inspeccion")
    console.log(fecha)
    /*if(){

    }
    else{}*/
}

/**
 * SI EL FORMATO DEL DNI INTRODUCIDO ESTA FUNCION ES LLAMADA
 * calcula si la letra al final del dni se corresponde con el dni.
 * para ello es necesario el dni, solo el numero limpio para poder obtener el resto
 * al dividirlo entre 23. Para ello se quitan la letra y el guion. 
 * @param {*Recibe el dni completo con formato 11111111-A} dni 
 */
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

/**
 * FUNCION PARA COMPROBAR QUE LAS DOS PASSWORDS COINCIDEN
 * @param {*Input del usuario en el campo de texto de la pagina web} e 
 */
const validarPassword = (e) =>{
    const p =document.getElementById('password');
    const p1 = document.getElementById('password1');

        if(p.value === e.value){
            document.getElementById('grupo__password').classList.remove('grupo_registrar-mal');
            document.getElementById('grupo__password').classList.add('grupo_registrar-bien');
            document.getElementById('grupo__password1').classList.remove('grupo_registrar-mal');
            document.getElementById('grupo__password1').classList.add('grupo_registrar-bien');
            botonDesbloquear(password,"true");
            botonDesbloquear(password1,"true");
        }
        else{
            document.getElementById('grupo__password').classList.remove('grupo_registrar-bien');
            document.getElementById('grupo__password').classList.add('grupo_registrar-mal');
            document.getElementById('grupo__password1').classList.remove('grupo_registrar-bien');
            document.getElementById('grupo__password1').classList.add('grupo_registrar-mal');
            botonDesbloquear(password1,"false");
            botonDesbloquear(password1,"false");
        }
        
    /*FUNCION PARA LA ROBUSTEZ DE LA PASSWORD*/
}
    

    


/*r.addEventListener('submit', (e) =>{
    e.preventDefault();
})*/
