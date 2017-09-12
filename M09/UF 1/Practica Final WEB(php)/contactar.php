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
    <link rel="stylesheet" type="text/css" href="css/Paginas/contactar.css">
    
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
                <li><a href="galeria.php"><div class="botonMenu">Galeria</div></a></li>
                <li><a href="contactar.php"><div class="botonMenu active">Contactar</div></a></li>
            </ul>
        </div>
        <a href="<?php enlaceInicio(); ?>"><img id="logo" src="img/logo.png"></a>
    </header>
    
    <div class="body">

        <div class="Seccion"><a name="Contactar"></a>
            <h1 class="titulo1">Formulario de contacto</h1>
<?php

            //funcion para enviar el email sin archivo
            function form_mail($sPara, $sAsunto, $sTexto, $sDe){
                $sCabeceraTexto = ""; 

                if ($sDe) 
                    $sCabeceras = "From:".$sDe."\n"; 
                else 
                    $sCabeceras = ""; 
                $sCabeceras .= "MIME-version: 1.0\n"; 
                foreach ($_POST as $sNombre => $sValor){
                    if($sNombre != "enviar")
                        $sTexto = $sTexto."\n".$sNombre.": ".$sValor;
                }

                //retorna el envio para el mensaje
                return(mail($sPara, $sAsunto, $sTexto, $sCabeceras)); 
            }
            
	//Comprobar si esta vacio, i si esta vacio o solo con espacios, se le asignara luego "", para que no siga luego
	if(isset($_POST['enviar'])) {

		if(trim($_POST['nombre'], ' ') == ""){
			$_POST['nombre'] = "";
		}
		if(trim($_POST['email'], ' ') == ""){
			$_POST['email'] = "";
		}
		if(trim($_POST['mensaje'], ' ') == ""){
			$_POST['mensaje'] = "";
		}
		if(trim($_POST['dni'], ' ') == ""){
			$_POST['dni'] = "";
		}
        
        //Comprobar si el dni esta correcto
        function validar_dni($dni){
            $dni = strtoupper($dni);
            $letra = substr($dni, -1);
            $numeros = substr($dni, 0, -1);
            if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
                return true; //es valido
            }else{
                return false; //no es valido
            }
        }
        
		// Aqui se deberan validar los datos ingresados por el usuario
		if($_POST['nombre'] == "" ||
			$_POST['email'] == "" ||
			$_POST['mensaje'] == "") {

			print "<p class='error'>El formulario no ha sido enviado.</p>";
			print "<p class='error'>Falta información necesaria.</p>";
		}else if($_POST['nombre'] != "" && validar_dni($_POST['dni']) == false){ //comprobar si es un dni valido
			print "<p class='error'>El dni no es valido.</p>";
        }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){//comprobar si es un correo valido
			print "<p class='error'>El correo electronico no es valido.</p>";
        }else{

            //enviar correo
            if (form_mail("lucas.infte@gmail.com", "Contacto carnivoras", "Los datos introducidos en el formulario son:\n\n", $_POST[email])){ 
                echo "<p class='correcto'>Su mensaje ha sido enviado con exito.</p>"; 
            }
		}
	}
?>

            
            <h5>*obligatorio</h5>
            <div>
                <form class="form-container" action="contactar.php#Contactar" method="post">
                    <p>
<!--                        <b>Nombre* :</b>-->
                        <input class="form-input" type="text" name="nombre" placeholder="Nombre *">
                    </p>
                    <p>
<!--                        <b>DNI :</b>-->
                        <input class="form-input" type="text" name="dni" placeholder="DNI">
                    </p>
                    <p>
<!--                        <b>Correo electronico* :</b>-->
                        <input class="form-input" type="text" name="email" placeholder="Correo electronico *">
                    </p>
                    <p>
<!--                        <b>Mensaje* :</b>-->
                        <textarea class="form-input form-textarea" name="mensaje" placeholder="Mensaje"></textarea>
                    </p>
                    <p>
                        <button type="submit" class="form-btn" name="enviar">Enviar</button>
                    </p>
                </form>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur est in repellendus veritatis debitis, eaque eos. Fuga labore dignissimos impedit, repellat consequuntur rerum ipsam tenetur soluta quis neque quidem ab, voluptatem tempore quos harum consectetur inventore eveniet odio sunt ipsa ad delectus quas. Sequi repellendus mollitia consequuntur, placeat obcaecati deleniti!</p>
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