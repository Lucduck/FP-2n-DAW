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
    <link rel="stylesheet" type="text/css" href="css/Paginas/articulos.css">
    
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
                    <a href="articulos.php"><div class="botonMenu active">Articulos</div></a>
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
                <li><a href="contactar.php"><div class="botonMenu">Contactar</div></a></li>
            </ul>
        </div>
        <a href="<?php enlaceInicio(); ?>"><img id="logo" src="img/logo.png"></a>
    </header>
    
    <div class="body">
        <div class="Seccion" id="invernadero"><a name="Invernadero"></a>
            <h1 class="titulo1">Construccion de un mini-ivernadero</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste sapiente rerum quisquam qui magnam architecto, placeat adipisci ullam laborum accusamus delectus. Aperiam asperiores deleniti dolores, sunt eaque! Ipsam illum porro sed nobis maxime tenetur! Labore beatae quod qui, debitis quaerat mollitia id. Earum obcaecati cumque, nisi, quo placeat at quisquam!</p>
            <div class="imagen"><img src="img/Articulos/art001/001.jpg"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste sapiente rerum quisquam qui magnam architecto, placeat adipisci ullam laborum accusamus delectus. Aperiam asperiores deleniti dolores, sunt eaque! Ipsam illum porro sed nobis maxime tenetur! Labore beatae quod qui, debitis quaerat mollitia id. Earum obcaecati cumque, nisi, quo placeat at quisquam!</p>
            <div class="imagen"><img src="img/Articulos/art001/002.jpg"></div>
            <p>Necesitaremos los siguientes materiales:</p>
            <ul>
                <li>Lorem ipsum dolor sit.</li>
                <li>Lorem ipsum dolor.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor.</li>
                <li>Lorem ipsum.</li>
                <li>Lorem ipsum dolor sit amet, consectetur.</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi nisi mollitia est, autem libero minima officia, quas unde blanditiis odit delectus debitis vero veritatis perspiciatis ut, et labore optio facere amet praesentium magni suscipit architecto. Reprehenderit voluptatem dignissimos, fuga, possimus laboriosam exercitationem enim ad voluptates earum eum sit, neque aperiam.</p>
            <div class="imagen"><img src="img/Articulos/art001/003.jpg"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate totam ullam, sint vel enim quaerat quos incidunt recusandae repellat, asperiores nesciunt mollitia eaque, officiis eum cumque obcaecati at praesentium nostrum, nulla ad eveniet modi optio neque! Veritatis id consequatur reprehenderit.</p>
            <div class="imagen"><img src="img/Articulos/art001/004.jpg"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia modi, odit corporis atque rerum debitis laudantium eius nostrum qui quidem officiis voluptatibus expedita dolor perspiciatis ipsa quaerat! Ea facilis, nulla, assumenda, iste aliquam cupiditate consequatur voluptas voluptatibus aliquid accusantium nisi in. Illum quasi magni, enim similique deserunt sequi soluta quis qui eius delectus laboriosam nisi quod exercitationem illo. Praesentium, laudantium harum nemo dolorum sequi id eos iste aliquam, eaque similique.</p>
            <div class="imagen"><img src="img/Articulos/art001/005.jpg"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores omnis nihil magnam cumque cupiditate animi nulla ad reprehenderit. Eaque magni est deserunt suscipit nobis dolorum pariatur expedita accusamus quas ut.</p>
            <div class="imagen"><img src="img/Articulos/art001/006.jpg"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi sint tempora aspernatur fuga doloremque hic sit quasi, natus, non animi id harum recusandae quibusdam facilis veniam dolorum deleniti placeat laudantium?</p>
            <div class="imagen"><img src="img/Articulos/art001/007.jpg"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis placeat natus non quo eius, perferendis nobis maxime sapiente, suscipit impedit iusto. Ab consequatur est voluptatibus omnis vero dolorem illum velit.</p>
            <div class="imagen"><img src="img/Articulos/art001/008.jpg"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima illo ullam, in, minus quisquam fugiat earum necessitatibus blanditiis maxime recusandae, repellat laboriosam cumque laudantium porro corporis? Soluta.</p>
            <div class="imagen"><img src="img/Articulos/art001/009.jpg" alt=""></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium itaque laudantium blanditiis, rem ducimus aut quia dolore sunt, velit magni fugit alias, nam, esse molestiae illum amet ullam obcaecati cum aliquam impedit consectetur. Ratione ab totam deserunt aliquam quod porro quae culpa, illo mollitia, necessitatibus. Culpa voluptatem quos iusto dolor repellat at consectetur, numquam id voluptatibus totam, tempore eaque architecto ut voluptate dolores ab consequatur exercitationem repellendus! Cumque at, reiciendis cupiditate id. Aperiam consectetur sit, perspiciatis ut quam consequuntur quidem.</p>
            <div class="imagen"><img src="img/Articulos/art001/010.jpg" alt=""></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere reiciendis repudiandae neque ab hic excepturi provident id praesentium similique nulla aspernatur, consequatur repellendus odio officia fugiat.</p>
            <p>Fotos: <a href="http://www.good.is/posts/just-in-time-for-winter-how-to-build-your-own-mini-greenhouse/#">good.is</a></p>
        </div>
        
        <div class="Seccion" id="reproduccion"><a name="Reproduccion"></a>
            <h1 class="titulo1">Reproducción asexual de drosera capensis</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, accusantium ab eum at quia nesciunt amet? Iusto vitae consectetur optio necessitatibus, accusantium dignissimos, veniam aperiam nihil a dolores doloremque aut:</p>
            <ol>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis cupiditate provident quia atque ad quas cum illum mollitia nesciunt explicabo sapiente suscipit, voluptatem sunt quod necessitatibus sequi magnam magni hic iste maxime non incidunt distinctio iusto placeat. Pariatur laboriosam sed explicabo voluptates accusantium animi, provident facilis, aut tenetur sunt molestiae.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quod sequi quaerat consequuntur? Alias, numquam, nostrum. Eius fugiat nihil reiciendis, fuga minus temporibus accusantium, facere possimus, quam adipisci aperiam odit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus voluptate quod doloribus molestias, sit voluptates animi non quisquam dolore, neque rerum rem vel magnam necessitatibus. Quo, sit numquam. Facere, quo, esse. Praesentium, explicabo dolores iusto vitae, non soluta sed aut!</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, recusandae illum aperiam harum dolorem voluptas quisquam dolor molestiae. Sequi repellendus, ut nam, harum quo in sit quidem, laboriosam officiis tempora repudiandae aut, dolorem similique voluptates magni culpa sint. Debitis quis assumenda laborum temporibus, quasi ex, tempore placeat quo consectetur totam, rem, nobis itaque corporis a! Expedita dicta atque impedit repudiandae unde, minus dolores. Tempora ipsum, quia obcaecati perspiciatis, repellendus ad.</li>
                <li>Esperar.</li>
            </ol>
            <p>Condiciones de cultivo:</p>
            <ul>
                <li>Lorem ipsum.</li>
                <li>Lorem ipsum dolor 13:00h amet consectetur (adipisicing elit. Quisquam deserunt, minima dicta. Cumque eligendi mollitia iusto eveniet fugiat).</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas suscipit atque itaque, vitae sequi adipisci.</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis autem, sunt quos, ipsam adipisci provident.</p>
            <div class="imagen"><img src="img/Articulos/art002/001.PNG"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam veniam voluptatibus asperiores nisi sequi eius unde ipsa.</p>
            <div class="imagen"><img src="img/Articulos/art002/002.PNG"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, deleniti, officia. Quia vitae unde assumenda rem. Expedita ipsa numquam nemo.</p>
            <div class="imagen"><img src="img/Articulos/art002/003.PNG"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci nemo porro, minus inventore! Reprehenderit, facilis?</p>
            <p>NOTA: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod culpa cupiditate quibusdam nulla, dignissimos necessitatibus itaque illo velit, aut vero quia maiores consequuntur commodi. Veniam laudantium delectus unde explicabo ullam accusantium. Temporibus odit dicta architecto minima, aut id cumque officia.</p>
        </div>
        
        <div class="Seccion" id="agua"><a name="Agua"></a>
            <h1 class="titulo1">La importancia del agua en las plantas carnívoras</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam natus maiores, magni veritatis blanditiis odio eos error, quaerat aliquam amet quisquam nobis possimus, repudiandae provident. In itaque unde doloribus quod, commodi, a accusamus, esse laudantium architecto illo odit, soluta cumque quis dolorem quia aut quidem repellat nam ex aperiam doloremque ipsam ad molestias animi? Maxime sequi ex dolores labore culpa. Hic dolores eius animi delectus reiciendis cupiditate aliquid voluptate itaque, dolor ratione vero voluptates, deleniti corporis asperiores tempore ut dignissimos, maiores temporibus inventore! Illum consequuntur ut beatae inventore, unde cumque harum saepe nihil quos commodi laudantium officiis cum sequi dicta!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eaque saepe aliquam, numquam commodi sed. Maxime fuga repellat, assumenda suscipit minus veniam vel eaque debitis impedit, libero sapiente inventore itaque doloribus qui laudantium fugiat veritatis unde blanditiis placeat facere laboriosam aperiam provident, ducimus! Totam quod cum, ullam excepturi, dolorem, alias repellat laboriosam nulla saepe ea a. Quos distinctio maxime non eaque facilis, earum expedita beatae, quasi similique nam dignissimos temporibus amet iusto atque labore voluptas ipsa rerum molestias? Quis saepe error nisi voluptatibus. Omnis dolorum temporibus a debitis, recusandae ratione perspiciatis fugit impedit veritatis! Sint, ea incidunt. Minima vero neque, officia est, a non corporis id quos quas nam nesciunt consectetur cumque, similique iste accusantium delectus reiciendis odit illo culpa. Est vel ullam molestiae, fuga reiciendis laudantium pariatur magnam vitae.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam expedita cum commodi nihil culpa quibusdam deleniti modi, assumenda, neque iste sint dolorem doloribus ipsa suscipit! Nemo porro asperiores saepe est. Nostrum architecto mollitia recusandae quo accusamus ut? Voluptate nihil, eveniet consectetur blanditiis soluta sit impedit a iste totam esse vitae iusto, corporis animi provident excepturi fugit eos laborum veniam, sunt vel. Cupiditate officia nisi inventore illo deleniti molestiae eveniet in magnam sequi non odio optio rem odit necessitatibus consequatur, beatae ullam amet minima. Error dicta, vitae totam molestiae sapiente, nesciunt, consectetur reiciendis possimus suscipit fugiat quaerat tenetur amet nam, eum id dolorum. Quisquam repellendus excepturi consectetur voluptatibus. Aliquam nihil accusamus placeat, officia quod dolores reiciendis, in hic qui ex corrupti enim ipsa? Doloremque, quaerat, distinctio. Fugit, odio reprehenderit voluptatum sit, nihil suscipit soluta delectus minus adipisci non dolorum iure repudiandae? Eos amet placeat quibusdam reiciendis, laudantium animi rem quas repellendus sequi asperiores nemo accusantium repudiandae optio minus a laboriosam, nihil eveniet et ducimus commodi harum. Obcaecati facilis odit illo, eum quia quasi. Tempore magnam voluptates dolore, quo aliquam neque, autem incidunt commodi vero sint quis beatae veritatis quisquam vitae dolor explicabo assumenda ut necessitatibus rerum saepe. Nesciunt numquam fugiat dolore, neque rerum totam minima iure repudiandae quas ea necessitatibus consequatur pariatur quis ut natus delectus reiciendis cupiditate, quaerat! Consectetur explicabo et magnam esse inventore ipsum tempore sunt quaerat natus voluptate quidem maxime ducimus soluta fugit autem ex, tenetur culpa, eum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi suscipit ex, quae assumenda expedita nesciunt explicabo labore esse qui ipsam soluta in saepe, iste dignissimos. Aperiam aspernatur ab voluptas, nesciunt dolorem ipsam deserunt numquam cupiditate doloremque, illo dignissimos eos quis, molestiae nam laboriosam ea perferendis minima aut ducimus ullam! At totam, voluptatibus, autem provident ducimus nam unde labore aut! Est ipsam dolores pariatur, provident natus harum iusto incidunt blanditiis saepe sed aut animi quibusdam ab, repudiandae sit fuga nesciunt recusandae. Commodi fugiat dolorem nisi mollitia veniam reprehenderit corrupti distinctio, sit optio eaque eveniet quo laudantium itaque temporibus. Tempora cumque, deleniti.</p>
            <div class="imagen"><img src="img/Articulos/art003/001.PNG" alt=""></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae corporis expedita odio commodi eaque iste aut natus molestiae. Iusto hic quidem saepe neque repellendus, quo magnam quibusdam inventore cupiditate nulla eos velit at est tempora illo debitis soluta dolores laborum quis nobis accusamus? Nemo alias, id eum. Molestiae, placeat vero culpa cum delectus tempore similique assumenda iste blanditiis aut eligendi ipsum at obcaecati aliquam deserunt animi quo labore architecto quaerat!</p>
        </div>
        
        <div class="Seccion"><a name="SubirArticulo"></a>
            <h1 class="titulo1">Publicar nuevo articulo</h1>
<?php

            //funcion para enviar el email con archivo
            function form_mail($sPara, $sAsunto, $sTexto, $sDe){
                $bHayFicheros = 0; 
                $sCabeceraTexto = ""; 
                $sAdjuntos = "";

                if ($sDe) 
                    $sCabeceras = "From:".$sDe."\n"; 
                else 
                    $sCabeceras = ""; 
                $sCabeceras .= "MIME-version: 1.0\n"; 
                foreach ($_POST as $sNombre => $sValor){
                    if($sNombre != "enviar")
                        $sTexto = $sTexto."\n".$sNombre." = ".$sValor;
                }

                foreach ($_FILES as $vAdjunto){ 
                    if ($bHayFicheros == 0){ 
                        $bHayFicheros = 1; 
                        $sCabeceras .= "Content-type: multipart/mixed;"; 
                        $sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";

                        $sCabeceraTexto = "----_Separador-de-mensajes_--\n"; 
                        $sCabeceraTexto .= "Content-type: text/plain;charset=iso-8859-1\n"; 
                        $sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n";

                        $sTexto = $sCabeceraTexto.$sTexto; 
                    } 
                    if ($vAdjunto["size"] > 0){ 
                        $sAdjuntos .= "\n\n----_Separador-de-mensajes_--\n"; 
                        $sAdjuntos .= "Content-type: ".$vAdjunto["type"].";name=\"".$vAdjunto["name"]."\"\n";; 
                        $sAdjuntos .= "Content-Transfer-Encoding: BASE64\n"; 
                        $sAdjuntos .= "Content-disposition: attachment;filename=\"".$vAdjunto["name"]."\"\n\n";

                        $oFichero = fopen($vAdjunto["tmp_name"], 'r'); 
                        $sContenido = fread($oFichero, filesize($vAdjunto["tmp_name"])); 
                        $sAdjuntos .= chunk_split(base64_encode($sContenido)); 
                        fclose($oFichero); 
                    } 
                }

                //si hay un archivo se añade y se envia
                if ($bHayFicheros)
                    $sTexto .= $sAdjuntos."\n\n----_Separador-de-mensajes_----\n"; 
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

		// Aqui se deberan validar los datos ingresados por el usuario
		if($_POST['nombre'] == "" ||
			$_POST['email'] == "" ||
			empty($_FILES['archivo']['name'])) {
			print "<p class='error'>El formulario no ha sido enviado.</p>";
			print "<p class='error'>Falta información necesaria.</p>";
		}else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){//comprobar si es un correo valido
			print "<p class='error'>El correo electronico no es valido.</p>";
                }else{

            //enviar correo
            if (form_mail("lucas.infte@gmail.com", "Nuevo articulo carnivoras", "Los datos introducidos en el formulario son:\n\n", $_POST[email])){ 
                echo "<p class='correcto'>Su articulo ha sido enviado con exito</p>"; 
            }
        }
    }
?>
            <h5>*obligatorio</h5>
            <div>
                <form class="form-container" action="articulos.php#SubirArticulo" method="post" enctype="multipart/form-data">
                    <p>
<!--                        <b>Nombre* :</b>-->
                        <input class="form-input" type="text" name="nombre" placeholder="Nomber *">
                    </p>
                    <p>
<!--                        <b>Apellidos :</b>-->
                        <input class="form-input" type="text" name="apellidos" placeholder="Apellidos">
                    </p>
                    <p>
<!--                        <b>Correo electronico* :</b>-->
                        <input class="form-input" type="text" name="email" placeholder="Correo electronico *">
                    </p>
                    <p>
<!--                        <b>Archivo* :</b>-->
                        <input class="form-input" type="file" name="archivo" multiple accept="">
                    </p>
                    <p>
<!--                        <b>Mensaje :</b>-->
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