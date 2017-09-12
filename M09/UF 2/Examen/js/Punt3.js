$(document).ready(function() {
  $(".tres .title").click(function(event) {
    var $contenido = $(event.target).siblings('div')
    if ($contenido.css('padding-top') === '10px') {
      $contenido.css('height', '0').css('padding', '0 10px')
    } else {
      $contenido.css('height', 'auto').css('padding', '10px')
    }
  });
});