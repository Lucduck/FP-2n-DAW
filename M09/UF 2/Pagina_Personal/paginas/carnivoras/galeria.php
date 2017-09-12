<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/favicon.png">
	<title>Carnivoras</title>
<!-- PARA MOVILES -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=0.9, minimum-scale=0.9">
<!--   CSS   -->
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/estil.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <!--PAGINA ESPECIFICA-->
    <link rel="stylesheet" type="text/css" href="css/Paginas/galeria.css">
    
<!--  JS  -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/ir-arriba.js"></script>
    
<!--   FONT   -->
    <link rel="stylesheet" type="text/css" href="fonts/font.css">
    
<!--   TIPOGRAFIA   -->
    <link href="https://fonts.googleapis.com/css?family=Francois One" rel="stylesheet">
</head>
<body>
    
    <a href="#"><span class="ir-arriba icon-chevron-thin-up"></span></a>
    
	<header>
        <div class="imgHeader"></div>
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu">
           <span class="icon-menu"></span>
        </label>
<?php 
//enlace al inicio automatico, para no tener de cambiarlo al subirlo a otro sitio
    function enlaceInicio(){
        if($_SERVER['HTTPS']){
	    echo 'httpt://' . $_SERVER['SERVER_NAME'];
	}else{
	    echo 'http://' . $_SERVER['SERVER_NAME'];
	}
    }
?>
        <div class="menu">
            <ul id="nav">
                <li><a href="<?php enlaceInicio(); ?>"><div class="botonMenu">inicio</div></a></li>
                <li>
                    <a href="principiantes.php"><div class="botonMenu">Principiantes</div></a>
                    <ul class="subs">
                        <li><a href="principiantes.php">Ayuda a principiantes</a>
                        <ul>
                            <li><a href="principiantes.php#QueDeboHacer">¿Qué debo hacer?</a></li>
                            <li><a href="principiantes.php#ClassificacionGeneral">Classificación general</a></li>
                            <li><a href="principiantes.php#TiposDeTrampas">Tipos de trampas</a></li>
                            <li><a href="principiantes.php#Enfermedades">Enfermedades</a></li>
                            <li><a href="principiantes.php#Sustratos">Sustratos</a></li>
                        </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="articulos.php"><div class="botonMenu">Articulos</div></a>
                    <ul class="subs">
                    <li><a href="articulos.php">Lista de articulos</a>
                        <ul>
                            <li><a href="articulos.php#Invernadero">Construccion de un mini-ivernadero</a></li>
                            <li><a href="articulos.php#Reproduccion">Reproducción asexual de drosera capensis</a></li>
                            <li><a href="articulos.php#Agua">La importancia del agua en las plantas carnívoras</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="articulos.php#SubirArticulo"><span class="icon-new-message"></span> Nuevo articulo</a>
                    </li>
                </ul>
                </li>
                <li><a href="<?php enlaceInicio(); ?>"><div class="icon-home botonMenu inicio"></div></a></li>
                <li><a href="galeria.php"><div class="botonMenu active">Galeria</div></a></li>
                <li><a href="contactar.php"><div class="botonMenu">Contactar</div></a></li>
            </ul>
        </div>
        <a href="<?php enlaceInicio(); ?>"><img id="logo" src="img/logo.png"></a>
    </header>
    
    <div class="body">
        <h1 class="titulo1">Galeria</h1>
        
<!--  IMATGES   -->
        <a class="lightbox" href="#1">
           <img src="img/6-710x434.jpg"/>
        </a> 
        <a class="lightbox" href="#2">
           <img src="img/001.jpg"/>
        </a> 
        <a class="lightbox" href="#3">
           <img src="img/Carnivorous_plants.jpg"/>
        </a> 
        <a class="lightbox" href="#4">
           <img src="img/dew-drops-carnivorous-plant.jpg"/>
        </a> 
        <a class="lightbox" href="#5">
           <img src="img/planta-carnivora.jpg"/>
        </a> 
        <a class="lightbox" href="#6">
           <img src="img/Dionaea-muscipula.jpg"/>
        </a> 
        <a class="lightbox" href="#7">
           <img src="img/liga.jpg"/>
        </a> 
        <a class="lightbox" href="#8">
           <img src="img/7458709678_3c1f823101_b.jpg"/>
        </a> 
        <a class="lightbox" href="#9">
           <img src="img/byblis01.jpg"/>
        </a> 
        <a class="lightbox" href="#10">
           <img src="img/callistos.jpg"/>
        </a>
        <a class="lightbox" href="#11">
           <img src="img/Nepenthes_rajah.png"/>
        </a>
    
<!--  LIGHTBOX   -->
        <div class="lightbox-target" id="1">
            <div class="imatge">
                <a href="#11" class="flechas"><span class="icon-chevron-with-circle-left"></span></a>
                <img src="img/6-710x434.jpg"/> 
                <a href="#2" class="flechas"><span class="icon-chevron-with-circle-right"></span></a>
            </div>
            <a class="lightbox-close" href="#"><span class="icon-cross"></span></a>
        </div>
        
        <div class="lightbox-target" id="2">
            <div class="imatge">
                <a href="#1" class="flechas"><span class="icon-chevron-with-circle-left"></span></a>
                <img src="img/001.jpg"/>
                <a href="#3" class="flechas"><span class="icon-chevron-with-circle-right"></span></a>
            </div>
            <a class="lightbox-close" href="#"><span class="icon-cross"></span></a>
        </div>
        
        <div class="lightbox-target" id="3">
            <div class="imatge">
                <a href="#2" class="flechas"><span class="icon-chevron-with-circle-left"></span></a>
                <img src="img/Carnivorous_plants.jpg"/>
                <a href="#4" class="flechas"><span class="icon-chevron-with-circle-right"></span></a>
            </div>
            <a class="lightbox-close" href="#"><span class="icon-cross"></span></a>
        </div>
        
        <div class="lightbox-target" id="4">
            <div class="imatge">
                <a href="#3" class="flechas"><span class="icon-chevron-with-circle-left"></span></a>
                <img src="img/dew-drops-carnivorous-plant.jpg"/>
                <a href="#5" class="flechas"><span class="icon-chevron-with-circle-right"></span></a>
            </div>
            <a class="lightbox-close" href="#"><span class="icon-cross"></span></a>
        </div>
        
        <div class="lightbox-target" id="5">
            <div class="imatge">
                <a href="#4" class="flechas"><span class="icon-chevron-with-circle-left"></span></a>
                <img src="img/planta-carnivora.jpg"/>
                <a href="#6" class="flechas"><span class="icon-chevron-with-circle-right"></span></a>
            </div>
            <a class="lightbox-close" href="#"><span class="icon-cross"></span></a>
        </div>
        
        <div class="lightbox-target" id="6">
            <div class="imatge">
                <a href="#5" class="flechas"><span class="icon-chevron-with-circle-left"></span></a>
                <img src="img/Dionaea-muscipula.jpg"/>
                <a href="#7" class="flechas"><span class="icon-chevron-with-circle-right"></span></a>
            </div>
            <a class="lightbox-close" href="#"><span class="icon-cross"></span></a>
        </div>
        
        <div class="lightbox-target" id="7">
            <div class="imatge">
                <a href="#6" class="flechas"><span class="icon-chevron-with-circle-left"></span></a>
                <img src="img/liga.jpg"/>
                <a href="#8" class="flechas"><span class="icon-chevron-with-circle-right"></span></a>
            </div>
            <a class="lightbox-close" href="#"><span class="icon-cross"></span></a>
        </div>
        
        <div class="lightbox-target" id="8">
            <div class="imatge">
                <a href="#7" class="flechas"><span class="icon-chevron-with-circle-left"></span></a>
                <img src="img/7458709678_3c1f823101_b.jpg"/>
                <a href="#9" class="flechas"><span class="icon-chevron-with-circle-right"></span></a>
            </div>
            <a class="lightbox-close" href="#"><span class="icon-cross"></span></a>
        </div>
        
        <div class="lightbox-target" id="9">
            <div class="imatge">
                <a href="#8" class="flechas"><span class="icon-chevron-with-circle-left"></span></a>
                <img src="img/byblis01.jpg"/>
                <a href="#10" class="flechas"><span class="icon-chevron-with-circle-right"></span></a>
            </div>
            <a class="lightbox-close" href="#"><span class="icon-cross"></span></a>
        </div>
        
        <div class="lightbox-target" id="10">
            <div class="imatge">
                <a href="#9" class="flechas"><span class="icon-chevron-with-circle-left"></span></a>
                <img src="img/callistos.jpg"/>
                <a href="#11" class="flechas"><span class="icon-chevron-with-circle-right"></span></a>
            </div>
            <a class="lightbox-close" href="#"><span class="icon-cross"></span></a>
        </div>
        
        <div class="lightbox-target" id="11">
            <div class="imatge">
                <a href="#10" class="flechas"><span class="icon-chevron-with-circle-left"></span></a>
                <img src="img/Nepenthes_rajah.png"/>
                <a href="#1" class="flechas"><span class="icon-chevron-with-circle-right"></span></a>
            </div>
            <a class="lightbox-close" href="#"><span class="icon-cross"></span></a>
        </div>
	</div>
	
	<footer>
        <table>
            <tr>
                <td><a href="" class="icon-facebook"></a></td>
                <td><a href="" class="icon-google"></a></td>
                <td><a href="" class="icon-twitter"></a></td>
                <td><a href="" class="icon-instagram"></a></td>
            </tr>
        </table>
        <br>
        <p>2016 © Lucas Pérez González</p>
	</footer>
</body>
</html>