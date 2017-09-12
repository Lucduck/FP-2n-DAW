// G-lobal Variables
var content // lo que tiene de haber en el juego, max 12 objetos, 6 distintos
var win = 0 //
var colors // los colores que tiene que tener cada texto de cada casilla
var numerosExos // los numeros que ya han salido
var tablero // el tablero ALEATORIO
var turn = 0 // turnos
var anterior = 0 // Guardado del anterior clicado
var points = 10000 // puntuacion del juego

const $box = document.getElementById('box')
const $wonBlock = document.getElementById('wonblock')
const $fondo = document.getElementById('fondo')
const $points = document.getElementById('points')

// Game methodsdocument.getElementById('box')
function preIniciar () {
  // Dibujar todas las casillas
  for (let i = 1; i <= 12; i++) {
    $box.innerHTML += `<canvas id = 'canvas${i}' width='150' height='150' style='margin: -6px -4px; border:4px solid grey;' onclick='canvasClicked(${i})'></canvas>`
  }
  // necessario para que cargue bien la font-family
    paint(1, '')
}

function paint (canvasNumber, symbol, color, back) {
  let name = `canvas${canvasNumber}`
  let c = document.getElementById(name)
  let ctx = c.getContext('2d')
  ctx.font = '150px Monoton'

  // borrar lo anterior
  ctx.beginPath()
  ctx.rect(0, 0, 150, 150)
  ctx.fillStyle = back
  ctx.fill()

  // escribir lo nuevo
  ctx.fillStyle = color
  ctx.fillText(symbol, 25, 135)
}

function canvasClicked (canvasNumber) {
  if (canvasNumber !== anterior && numerosExos.indexOf(tablero[canvasNumber - 1]) === -1) {
    // dibujar el numero
    paint(canvasNumber, tablero[canvasNumber - 1], colors[tablero[canvasNumber - 1] - 1], '#333333')

    if (turn % 2 === 0) {
      anterior = canvasNumber
    } else if (tablero[canvasNumber - 1] === tablero[anterior - 1]) {
      win++
      numerosExos[numerosExos.length] = tablero[canvasNumber - 1]
      anterior = 0
      points -= 243
    } else {
      // tapa para que no se pueda clicar
      $fondo.style.display = 'block'
      setTimeout(function () {
        // borrar actual
        paint(canvasNumber, '?', '#C9608E', '#250A1A')
        // borrar anterior
        paint(anterior, '?', '#C9608E', '#250A1A')
        anterior = 0
        // quita la capa que tapa, para continuar jugando
        $fondo.style.display = 'none'
      }, 400)
      points -= 243
    }

    turn++

    if (win === 6) {
      $wonBlock.style.display = 'block'
      $fondo.style.display = 'block'
      if (points < 0) {
        points = 0
      }
      $points.innerHTML = `${points} points`
    }
  }
}

function playAgain () {
  document.location.reload(true)
}

document.getElementById('playAgain').addEventListener('click', playAgain)

// iniciar juego
preIniciar()
