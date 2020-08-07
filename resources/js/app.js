require('./bootstrap');
var $ = require( "jquery" );

$(document).ready(function(){

  // Creo l'evento del click sulla domanda

  $(document).on('click', '.question',
  function(){

    var thisElement = $(this).siblings('.answer');

    // Mostro o nascondo l'elemento al click;

    thisElement.slideToggle(400);

    // Cambio l'icona del "+" e "-" a seconda della visualizzazione

    var thisIcon = $(this).find('i');

    thisIcon.toggleClass('fas fa-plus');
    thisIcon.toggleClass('fas fa-minus');





  });

});
