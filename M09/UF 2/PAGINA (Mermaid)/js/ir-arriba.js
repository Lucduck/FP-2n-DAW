$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $('.ir-arriba').fadeIn(200)
    } else {
      $('.ir-arriba').fadeOut(200)
    }
  })
  /* SCROLL ARRIBA */
  $('.ir-arriba').click(function (event) {
    event.preventDefault()
    $('html, body').animate({scrollTop: 0}, 300)
  })

  /* SCROLL AUTOMATICO AL BODY */
  $('.ir-a-body').click(function (event) {
    var link = $(this)
    var anchor = link.attr('href')
    $('html, body').stop().animate({
      scrollTop: jQuery(anchor).offset().top
    }, 600)
    return false
  })

  /* MENU HAMBURGUESA */
  $('input').click(function () {
    $('#btn-menu:not(:checked)').parent()
      .delay(300)
      .queue(function (next) {
        $(this).css('height', '50px')
        next()
      })
    $('#btn-menu:checked').parent().css('height', '100vh')
    $('#btn-menu:not(:checked)~.menu').css('margin-left', '-250px')
    $('#btn-menu:checked~.menu')
      .delay(300)
      .queue(function (next) {
        $(this).css('margin-left', '20px')
        next()
      })
  })
  /* MENU HAMBURGUESA (X) */
  jQuery(document).ready(function () {
    $('.click').click(function () {
      $('#burger').toggleClass('activeHamb')
    })
  })
})
