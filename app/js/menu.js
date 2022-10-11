/**
 * CONSTANTES
 */
const btn = document.querySelector('#btnMenu')
const menu = document.querySelector('#menu')

/**
 * LISTENER PARA DESPLEGAR LA VENTANA LATERAL CUANDO SE CLICKA EN EL ICONO DEL BOCADILLO
 */
btn.addEventListener("click",function(){
    menu.classList.toggle("aparecer");
});

/**
 * SLIDER DE IMAGENES
 */
function App() {}

window.onload = function (event) {
    var app = new App();
    window.app = app;
};

App.prototype.processingButton = function(event) {
    const btn = event.currentTarget;
    const sliderList = event.currentTarget.parentNode;
    const seguimiento = event.currentTarget.parentNode.querySelector('#seguimiento');
    const slider = seguimiento.querySelectorAll('.slider');

    const sliderWidth = slider[0].offsetWidth;
    
    const seguimientoWidth = seguimiento.offsetWidth;
    const listWidth = sliderList.offsetWidth;

    seguimiento.style.left == ""  ? leftPosition = seguimiento.style.left = 0 : leftPosition = parseFloat(seguimiento.style.left.slice(0, -2) * -1);

    btn.dataset.button == "button-siguiente" ? prevAction(leftPosition,sliderWidth,seguimiento) : nextAction(leftPosition,seguimientoWidth,listWidth,sliderWidth,seguimiento)
}

let prevAction = (leftPosition,sliderWidth,seguimiento) => {
    if(leftPosition > 0) {
        console.log("entro 2")
        seguimiento.style.left = `${-1 * (leftPosition - sliderWidth)}px`;
    }
}

let nextAction = (leftPosition,seguimientoWidth,listWidth,sliderWidth,seguimiento) => {
    if(leftPosition < (seguimientoWidth - listWidth)) {
        seguimiento.style.left = `${-1 * (leftPosition + sliderWidth)}px`;
    }
}