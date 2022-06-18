function mensaje(evento){
    evento.preventDefault();
    var mensaje = document.getElementById('texto').value;
    var a = parseFloat(document.getElementById('numero1').value);
    var b = parseFloat(document.getElementById('numero2').value);
    var tipo = document.getElementById('tipo').value;
    var resultado = calcular(a,b,tipo);
    console.log(mensaje);
    console.log(resultado);
    document.querySelector('h1').textContent = mensaje;
    document.querySelector('h2').textContent = resultado;
}

function calcular(a,b,tipo){
    var resultado = 0;
    switch(tipo){
        case 'suma':
            resultado = a + b;
            break;
        case 'resta':
            resultado = a - b;
            break;
        case 'multiplicacion':
            resultado = a * b;
            break;
        case 'division':
            resultado= a / b;
            break;
    }
    return resultado;
}

function ejecutar(){
    var text = document.querySelector('#formulario');
    text.addEventListener("submit", mensaje);
}

ejecutar();