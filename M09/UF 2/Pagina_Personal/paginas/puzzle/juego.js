var MiArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]
MiArray = MiArray.sort(function () { return Math.random() - 0.3 })

$('body').append('<table></table>')
var cont = 0
for (var i = 0; i < 3; i++) {
  $('body table').append('<tr></tr>')
  for (var j = 0; j < 4; j++) {
    $('body table tr:nth-child(' + (i + 1) + ')').append('<th id="pieza' + MiArray[cont] + '"></th>')
    if (MiArray[cont] !== 12) {
      $('#pieza' + MiArray[cont]).attr('fila', i).attr('columna', j).attr('pieza', MiArray[cont])
    } else {
      $('#pieza' + MiArray[cont]).attr('fila', i).attr('columna', j).attr('pieza', MiArray[cont]).attr('id', 'blanco')
    }
    cont++
  }
}

$(document).ready(function () {
  $('body').keydown(function (event) {
    var fila = $('#blanco').attr('fila')
    var columna = $('#blanco').attr('columna')
    var numPiezaBlanca = $('#blanco').attr('pieza')
    var $blanca = $('#blanco')

    switch (event.which) {
      case 37:
        columna = columna - 0 + 1
        break
      case 38:
        fila = fila - 0 + 1
        break
      case 39:
        columna = columna - 1
        break
      case 40:
        fila = fila - 1
        break
    }
    var $ficha = $('[fila=' + fila + '][columna=' + columna + ']')
    $blanca.attr('id', $ficha.attr('id')).attr('pieza', $ficha.attr('pieza'))
    $ficha.attr('id', 'blanco').attr('pieza', numPiezaBlanca)
  })
})

function comprobar () {
  var cont = 1
  var fallado = false
  for (var i = 0; i < 3; i++) {
    if (fallado) {
      break
    }
    for (var j = 0; j < 4; j++) {
      var pieza = $('body table tr:nth-child(' + (i + 1) + ') th:nth-child(' + (j + 1) + ')').attr('pieza')
      if (pieza - 0 !== cont) {
        fallado = true
        break
      }
      cont++
    }
  }
  if (fallado) {
    $('.respuesta').text('INCORRECTO')
  } else {
    $('.respuesta').text('CORRECTO!!')
    $('#blanco').attr('id', 'pieza12')
  }
}
