
$('canvas').click(function (eventObject) {
  if (!eventObject.target.className.includes('icon')) {
    var elem = $(this)
    if (elem.attr('class') === '') {
      $('canvas').attr('class', '')
      elem.attr('class', 'canvas')
    } else {
      elem.attr('class', '')
    }
  }
})



class Sprite {
  constructor ({ticksPerFrame, numberOfFramesHorizontal, numberOfFramesVertical, context, width, height, image, coordenadaX, coordenadaY, widthReal, heightReal}) {
    this.frameIndexHorizontal = 0
    this.frameIndexVertical = 0
    this.tickCount = 0
    this.ticksPerFrame = ticksPerFrame || 0
    this.numberOfFramesHorizontal = numberOfFramesHorizontal || 1
    this.numberOfFramesVertical = numberOfFramesVertical || 1
    this.context = context
    this.width = width
    this.height = height
    this.image = image
    this.coordenadaX = -this.widthFrame() + coordenadaX
    this.coordenadaY = coordenadaY,
    this.widthReal = widthReal,
    this.heightReal = heightReal
  }

  widthFrame () {
    return this.width / this.numberOfFramesHorizontal
  }

  update () {
    this.tickCount += 1
    this.coordenadaX += 3
    if (this.tickCount > this.ticksPerFrame) {
      this.tickCount = 0
      if (this.frameIndexHorizontal < this.numberOfFramesHorizontal - 1) {
        this.frameIndexHorizontal += 1
      } else {
        this.frameIndexHorizontal = 0
        if (this.frameIndexVertical < this.numberOfFramesVertical - 1) {
          this.frameIndexVertical += 1
        } else {
          this.frameIndexVertical = 0
        }
      }
    }
  }
  render () {
    this.coordenadaX = this.coordenadaX > width ? -512 : this.coordenadaX
    this.context.drawImage(
      this.image,
      this.frameIndexHorizontal * this.widthFrame(),
      this.frameIndexVertical * this.height / this.numberOfFramesVertical,
      this.width / this.numberOfFramesHorizontal,
      this.height / this.numberOfFramesVertical,
      this.coordenadaX,
      this.coordenadaY,
      // cambio aqui, para que la mida cambie mientras cambia la cordenada x
      this.coordenadaX,
      this.coordenadaX
    )
  }
}

function gameLoop () {
  window.requestAnimationFrame(gameLoop)
  canvas.getContext('2d').clearRect(0, 0, width, height)
  primer.update()
  segon.update()
  primer.render()
  segon.render()
}
const width = 500
const height = 200
let canvas = document.getElementById('canvasAnimation')
canvas.width = width
canvas.height = height

let primerImage = new window.Image()
let segonImage = new window.Image()

const primer = new Sprite({
  context: canvas.getContext('2d'),
  width: 980,
  height: 390,
  image: primerImage,
  numberOfFramesHorizontal: 14,
  numberOfFramesVertical: 6,
  ticksPerFrame: 1,
  coordenadaX: 0,
  coordenadaY: 75,
  widthReal: 90,
  heightReal: 40
})
const segon = new Sprite({
  context: canvas.getContext('2d'),
  width: 2392,
  height: 804,
  image: segonImage,
  numberOfFramesHorizontal: 4,
  numberOfFramesVertical: 2,
  ticksPerFrame: 4,
  coordenadaX: 260,
  coordenadaY: 25,
  widthReal: 230,
  heightReal: 150
})

// Load sprite sheet
segonImage.addEventListener('load', gameLoop)
primerImage.src = 'img/sprits/npc_butterfly__x1_fly-side_png_1354829525.png'
segonImage.src = 'img/sprits/FlyingGameCharacter.png'

// FLUBBER
function updateFrame () {
  if (curFrameX % cols === cols - 1) {
    curFrameY = ++curFrameY % rows
    srcY = curFrameY * heightflubber
  }
  curFrameX = ++curFrameX % cols
  srcX = curFrameX * widthflubber

  ctx.clearRect(x, y, midaWidth, midaHeight)
}

function draw () {
  updateFrame()
  ctx.drawImage(character, srcX, srcY, widthflubber, heightflubber, x, y, midaWidth, midaHeight)
}

var spriteWidth = 1000
var spriteHeight = 500

var cols = 4
var rows = 2

var widthflubber = spriteWidth / cols

var heightflubber = spriteHeight / rows

var midaWidth = widthflubber * 1.4
var midaHeight = heightflubber * 1.4

var curFrameX = 0
var curFrameY = 0

var frameCount = 4

var x = 0
var y = 0

var srcX = 0
var srcY = 0

// Getting the canvas 
var canvasflubber = document.getElementById('canvas')

// mida frame
canvasflubber.width = midaWidth
canvasflubber.height = midaHeight

// Establishing a context to the canvas 
var ctx = canvasflubber.getContext('2d')

// Creating an Image object for our character 
var character = new Image()

character.src = 'img/sprits/SlimeLargeHD.png'

setInterval(draw, 100)
