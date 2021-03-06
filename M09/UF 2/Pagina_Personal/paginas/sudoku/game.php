<html lang="es">

<head>
  <?php 
    header("Content-Type: application/javascript; charset=UTF-8");
  ?>
  <title>SUDOKU</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">


  <!-- PARA MOVILES -->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=0.6, minimum-scale=0.6">
  <!-- FONT ROBOTO -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- ICONS AWESOME -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

  <!-- PARA MOVILES TACTILES -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

  <?php 
    if(isset($_POST['ficha'])){
  ?>
  <script>
      var ruta_fichas = <?php echo $_POST['ficha'];?>;
  </script>
  <?php
    }else{
  ?>
  <script>
      var ruta_fichas = 'assets/sudoku2/';
  </script>
  <?php
    }
  ?>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="game.css">
  <script src="tableros.js"></script>
  <script src="sudoku.js"></script>
  
  <script src="loader.js"></script>

</head>

<body onload="Cargado();">
  <!-- CARGANDO -->
  <div class="Message" id="cargando">
    <h1>Loading...</h1>
    <br /><br />
    <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
  </div>
  <!-- CONTENIDO -->
  <div id="content">
    <div class="cosa"></div>
    <div class="fondoSudoku">
      <script>
        for(var i = 0; i < 16; i++){
          document.write('<div class="fondo"></div>');
        }
      </script>
    </div>
    <table class="lineas">
      <script>
        for(var i = 0; i < 4; i++){
            document.write('<tr>');
          for(var j = 0;  j < 4;  j++){
            document.write('<th></th>');
          }
            document.write('</tr>');
        }
      </script>
    </table>
    <div id="cardSlots"></div>
    <div id="cardPile"></div>
    <div id="basura"></div>
  </div>

  <!-- GANAR -->
  <div class="Message" id="successMessage">
    <h1>CONGRATULATIONS!!!</h1>
    <h1>IS FINISHED</h1>
    <button class="butonBlue" onclick="init()">Play Again</button>
    <br/>
    <button class="buttonRed" onclick="window.location='index.html'">Menu</button>
  </div>
</body>

</html>
