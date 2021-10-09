$(document).ready(function(){
    $("div ul li a.Notificaciones").click(function(){
        $(".panel").slideToggle("slow");
    });
});
var lista = document.getElementById('lista');
const botonesLista = ['Inicio', 'Explorar', 'Notificaciones', 'Mensajes', 'Guardados', 'Lista'];

for(let i=0; i<botonesLista.length; i++){
   const elemento = document.createElement('li');
   elemento.id=botonesLista[i];
   const enlace = document.createElement('a');
   enlace.href="#";
   enlace.className=botonesLista[i];
   enlace.innerHTML=botonesLista[i];
   lista.append(elemento);
   elemento.append(enlace);
};