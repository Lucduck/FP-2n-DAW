var cont = document.querySelector('.contenidor')
var msnry = new Masonry(cont, {
  isFitWidth: true,
  itemSelector: '.element'
})

var $container = $('.contenidor')
$container.imagesLoaded(function () {
  $container.masonry()
})


/*  AMPLIAR ELEMENTO CLICADO  */
$('.element').click(function (eventObject) {
  if (!eventObject.target.className.includes('icon')) {
    var elem = $(this)
    if (elem.attr('class') === 'element') {
      $('.element').attr('class', 'element')
      elem.attr('class', 'element elementClick')
    } else {
      elem.attr('class', 'element')
    }
  }
})

/*  cambiar color al clicar corazon  */
$('.heart').click(function (eventObject) {
  var heart = $(this)
  pink = 'rgb(255, 150, 255)'
  red = 'rgb(255, 70, 70)'

  if (heart.css('color') === red) {
    heart.css('color', 'rgb(123, 123, 123)')
    heart = heart.parent().children('.iconWhite')
    heart.css('color', 'white')
  } else if (heart.css('color') === pink) {
    heart.css('color', red)
    heart = heart.parent().children('.iconWhite')
    heart.css('color', red)
  } else {
    heart.css('color', pink)
    heart = heart.parent().children('.iconWhite')
    heart.css('color', pink)
  }
})
