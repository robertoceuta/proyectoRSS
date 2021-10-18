let nombre = prompt('Introduce tu nombre');
let apellidos = prompt('Introduce tus apellidos');
let edad = prompt('Introduce tu edad');
let caja = document.getElementById('hola');
console.log(nombre,apellidos,edad);
caja.innerHTML= 'Hola '+nombre+' '+apellidos+' . Tu edad es '+edad+' años.';