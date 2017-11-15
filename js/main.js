var contenedor_carga = document.getElementById("contenedor_carga");
window.addEventListener('load', function() {
    $("#contenedor_carga").fadeOut();
})

$(document).ready(function(){
    $(".button-collapse").sideNav();
    $('.slider').slider({
        indicators: false,
    });
    $('.parallax').parallax();
    Materialize.updateTextFields();
});