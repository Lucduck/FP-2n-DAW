<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/favicon.ico">
	<title>LUDUCK</title>
<!-- PARA MOVILES -->
    <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1, maximum-scale=0.9, minimum-scale=0.9'>
    
<!-- FONT ROBOTO -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

<!-- ICONS AWESOME -->
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'  type='text/css' rel='stylesheet'>

<!--   CSS   -->
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/estil.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/Paginas/contactar.css">
    
<!-- JQUERY -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    
    
<!--  JS  -->
	  <script src="js/ir-arriba.js"></script>
</head>
<body>
    
    <a href="#"><span class="ir-arriba fa fa-chevron-up"></span></a>
    
	<header>
        <h1 class="titleIndex">Mermaid</h1>
        <h2 class="titleIndex2">Contactar</h2>
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu">
            <div id="burger">
                <div class="click"></div>
                <span></span>
            </div>
        </label>
        <div class="menu">
            <ul id="nav">
                <li><a href="index.html"><div class="botonMenu">inicio</div></a></li>
                <li>
                    <a href="galeria.html"><div class="botonMenu">Galeria</div></a>
                </li>
                <li>
                    <a href="juegos.html"><div class="botonMenu">Juegos</div></a>
                </li>
                <li><a href="index.html"><div class="fa fa-home botonMenu inicio"></div></a></li>
                <li><a href="otros.html"><div class="botonMenu">Otros</div></a></li>
                <li><a href="contactar.php"><div class="botonMenu active">Contactar</div></a></li>
            </ul>
        </div>
        <a href="#body" class="ir-a-body"><i class="fa fa-chevron-down fa-3x"></i></a>
        
    </header>
    
    <div id="body" class="body">

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
                        <button type="submit" class="form-btn buttonBlue" name="enviar">Enviar</button>
                    </p>
                </form>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur est in repellendus veritatis debitis, eaque eos. Fuga labore dignissimos impedit, repellat consequuntur rerum ipsam tenetur soluta quis neque quidem ab, voluptatem tempore quos harum consectetur inventore eveniet odio sunt ipsa ad delectus quas. Sequi repellendus mollitia consequuntur, placeat obcaecati deleniti!</p>
        </div>
	</div>
	
	
	<footer>
        <table>
            <tr>
                <td><a href="" class="fa fa-facebook"></a></td>
                <td><a href="" class="fa fa-google"></a></td>
                <td><a href="" class="fa fa-twitter"></a></td>
                <td><a href="" class="fa fa-instagram"></a></td>
            </tr>
        </table>
        <br>
        <p>2017 © Lucas Pérez González</p>
	</footer>
</body>
</html>