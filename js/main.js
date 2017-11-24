var contenedor_carga = document.getElementById("contenedor_carga");
window.addEventListener('load', function() {
    $("#contenedor_carga").fadeOut();
})

$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.slider').slider({
        indicators: false,
    });
    Materialize.updateTextFields();
});