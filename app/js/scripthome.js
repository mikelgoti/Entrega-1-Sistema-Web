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

function change(){
    var element = document.getElementById('div_usuario')
    var input = document.getElementById('input_usuario')

    if(element.style.display === "block"){
        element.style.display = "none";
        input.style.display = "block";
    }
    else{
        input.style.display = "none";
        element.style.display = "block";
    }
}

function changeEmail(){
    var e = document.getElementById('div_email')
    var i = document.getElementById('input_email')

    if(e.style.display === "block"){
        e.style.display = "none";
        i.style.display = "block";
    }
    else{
        i.style.display = "none";
        e.style.display = "block";
    }
}

function changeNombre(){
    var e = document.getElementById('div_nombre')
    var i = document.getElementById('input_nombre')

    if(e.style.display === "block"){
        e.style.display = "none";
        i.style.display = "block";
    }
    else{
        i.style.display = "none";
        e.style.display = "block";
    }
}

function changeApellido(){
    var e = document.getElementById('div_apellido')
    var i = document.getElementById('input_apellido')

    if(e.style.display === "block"){
        e.style.display = "none";
        i.style.display = "block";
    }
    else{
        i.style.display = "none";
        e.style.display = "block";
    }
}

function changeApellido1(){
    var e = document.getElementById('div_apellido1')
    var i = document.getElementById('input_apellido1')

    if(e.style.display === "block"){
        e.style.display = "none";
        i.style.display = "block";
    }
    else{
        i.style.display = "none";
        e.style.display = "block";
    }
}

