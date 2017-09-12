/*  CLASSE LECTOR  */
var Lector = function (nSoci, nom, telefon, adreca) {
  if (arguments.length != 4)
    throw 'Nombre de paràmetres incorrectes al crear un Lector'

  // Data provisional para la multa, sera una data que ya ha pasado hace años
  var dat = new Date('1999')

  this.nSoci = nSoci
  this.nom = nom
  this.telefon = telefon

  this.adreca = adreca
  var _prestecs = []
  var _multaIni = dat
  var _multaFi = dat

  this.retornar = function (idLibre, dataActual) {
    if (_prestecs.length == 0)
      throw 'No hi ha cap llibre que tingui de retornar'
    var numId = -1
    for (var i = 0; i < _prestecs.length; i++) {
      if (_prestecs[i][0] == idLibre)
        var numId = i
    }

    if (numId != -1) {
      var diasDif = dataActual.getTime() - _prestecs[numId][1].getTime()
      var dias = Math.round(diasDif / (1000 * 60 * 60 * 24))
      console.log('Ha estat retornat el llibre amb la id ' + idLibre)
      if (dias > 30) {
        _multar(dias * 2, dataActual)
      }

      // elimina 1 a partir de la posicio numId
      _prestecs.splice(numId, 1)
    }
  }

  this.prestar = function (idLibre, dataActual) {
    var ara = new Date()
    // si esta multat una data de fi, mes gran a la actual o te prestat 3 llibres, retornara false
    if (ara <= _multaFi || _prestecs.length >= 3)
      return false
    _prestecs[_prestecs.length] = [idLibre, dataActual]
    console.log('Ha estat prestat el llibre amb la id ' + idLibre)
  }

  // Afegeixo la data actual, per que el metode retornar tambe la te, i si la te, es que es pot especificar quin dia el retornas
  var _multar = function (numDies, dataActual) {
    var meses = new Array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre')
    _multaIni = new Date(dataActual)
    _multaFi = dataActual
    _multaFi.setDate(_multaFi.getDate() + numDies)
    console.log('i ha estat multat ' + numDies + ' dias, fins el ' + _multaFi.getDate() + ' de ' + meses[_multaFi.getMonth()] + ' de ' + _multaFi.getFullYear())
  }
}

// Prueba para mirar si va todo bien, he puesto el console.log para mostrar los datos, per que no sabia donde mostrarlos ahora mismo
var lucas = new Lector('281', 'Vic', 'Daniel Rovira', 'Danira')
lucas.prestar(213, new Date)

var fecha2 = new Date(2016, 12, 10)
lucas.prestar(567, fecha2)
lucas.retornar(567, new Date)
