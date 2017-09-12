// Global Variables
var painted3R
var content3R
var winningCombinations3R
var turn3R = 0
var theCanvas3R
var c3R
var cxt3R
var squaresFilled3R = 0
var w3R
var y3R

// Game methods
function Clicked3R (canvasNumber3R) {
  theCanvas3R = '3R-canvas' + canvasNumber3R
  c3R = document.getElementById(theCanvas3R)
  cxt3R = c3R.getContext('2d')
  cxt3R.font = '150px Monoton'

  if (painted3R[canvasNumber3R - 1] == false) {
    if (turn3R % 2 == 0) {
      cxt3R.fillStyle = '#C9608E'
      cxt3R.fillText('X', 10, 135)
      content3R[canvasNumber3R - 1] = 'X'
    } else {
      cxt3R.fillStyle = '#EEC571'
      cxt3R.fillText('O', 5, 135)
      content3R[canvasNumber3R - 1] = 'O'
    }

    turn3R++
    painted3R[canvasNumber3R - 1] = true
    squaresFilled3R++
    checkForWinners3R(content3R[canvasNumber3R - 1])

    if (squaresFilled3R == 9) {
      document.getElementById('wonblock-3R').style.opacity = '1'
      document.getElementById('wonblock-3R').style.zIndex = '3'
      document.getElementById('wonblock-3R').style.lineHeight = '70px'
      document.getElementById('wonblock-3R').style.fontSize = '40px'
      document.getElementById('fondo-3R').style.zIndex = '2'
      document.getElementById('won-3R').innerHTML = 'GAME OVER!'
    }
  } else {
    alert('THAT SPACE IS ALREADY OCCUPIED WITH YOUR HEART!')
  }
}

function checkForWinners3R (symbol) {
  for (var a = 0; a < winningCombinations3R.length; a++) {
    if (content3R[winningCombinations3R[a][0]] === symbol && content3R[winningCombinations3R[a][1]] === symbol && content3R[winningCombinations3R[a][2]] === symbol) {

      // /*//////*///

      document.getElementById('wonblock-3R').style.opacity = '1'
      document.getElementById('wonblock-3R').style.zIndex = '3'
      document.getElementById('fondo-3R').style.zIndex = '2'
      document.getElementById('won-3R').innerHTML = symbol + ' WON!'
    }
  }
}
function playAgain3R () {
  location.reload(true)
}

// iniciar juego

// necessario para que cargue bien
c3R = document.getElementById('3R-canvas1')
cxt3R = c3R.getContext('2d')
cxt3R.font = '150px Monoton'
cxt3R.fillStyle = '#C9608E'
cxt3R.fillText('', 0, 0)
