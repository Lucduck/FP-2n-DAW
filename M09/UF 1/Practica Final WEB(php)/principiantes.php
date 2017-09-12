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
    <link rel="stylesheet" type="text/css" href="css/Paginas/principiantes.css">
    
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
                    <a href="principiantes.php"><div class="botonMenu active">Principiantes</div></a>
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
                <li><a href="contactar.php"><div class="botonMenu">Contactar</div></a></li>
            </ul>
        </div>
        <a href="<?php enlaceInicio(); ?>"><img id="logo" src="img/logo.png"></a>
    </header>
                            
    <div class="body">
        <div class="Seccion"><a name="QueDeboHacer"></a>
            <h1 class="titulo1">¿Qué debo hacer?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum soluta voluptatem nobis alias, cumque, sint. Quia tenetur qui quod, soluta nihil voluptatibus tempora voluptates omnis? Obcaecati nisi sed incidunt voluptatem esse optio corrupti, laborum a earum repellat cumque nam eligendi, hic eaque fuga mollitia doloremque cupiditate atque odit qui delectus enim. Iure sapiente maxime vel architecto beatae, sunt quas harum incidunt ducimus sed, suscipit omnis eveniet libero eligendi natus nesciunt eaque non nihil reprehenderit recusandae, cumque totam! Earum ducimus dolor neque at dolorum possimus error incidunt ullam eos, dignissimos, id enim itaque atque necessitatibus sed accusantium blanditiis exercitationem. At, ipsam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, repellat, omnis. Ex alias quia, optio eos fuga expedita veritatis facere dolorum accusantium sequi eveniet ab quidem placeat dicta molestiae saepe reiciendis sed atque unde! Maxime ratione, deleniti voluptatem similique quod quo ut harum. Dolorem sunt doloribus dolore sequi et voluptates perspiciatis, exercitationem dolorum consequuntur inventore cupiditate sed ipsum totam corporis nesciunt in aspernatur, blanditiis sit sint commodi voluptas! Asperiores optio cupiditate porro et itaque obcaecati, dolorem ad dolor tenetur illo ratione exercitationem inventore incidunt maxime, nesciunt nulla libero deserunt molestiae! Praesentium tempora doloribus inventore tempore, dolores ex vitae tenetur animi.</p>
            <br>
            <h3>Los tres principios básicos para cultivar plantas carnivoras:</h3>
            <p>1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ab omnis nisi eligendi labore officiis. Modi culpa ab architecto tenetur amet excepturi ipsa maiores. Unde, vitae. Tempora accusantium quae quasi, eos eum. Beatae similique repudiandae necessitatibus, expedita nesciunt veniam tenetur nulla delectus, facere aperiam voluptas deserunt? Fugiat molestiae est quod facilis minus corrupti maiores mollitia. Culpa voluptatem est necessitatibus asperiores.</p>
            <p>2. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore doloribus incidunt a placeat recusandae excepturi dolor rem, suscipit illo molestiae dolorum quisquam totam fugiat impedit ipsam ex aspernatur iusto quam ipsa corporis. Molestiae repudiandae natus ex quasi explicabo, quos omnis iste fugiat, non harum assumenda facere adipisci asperiores expedita deserunt.</p>
            <p>3. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur itaque incidunt debitis accusamus illum omnis, beatae libero non dolor. Cumque porro expedita suscipit, incidunt reprehenderit, deserunt. Reprehenderit temporibus quas ullam odit nihil illo ipsum, iure eveniet voluptatum. Perspiciatis mollitia odio facilis! Expedita officia corrupti fugit.</p>
            <br>
            <h3>¿Y cómo funcionan esas hojas-trampas?</h3>
            <p><img src="img/Principiantes/1.PNG" class="pos1">Lorem ipsum dolor sit amet, consectetur.</p>
            <p><img src="img/Principiantes/2.PNG" class="pos1">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            <p><img src="img/Principiantes/3.PNG" class="pos1">Lorem ipsum dolor sit.</p>
            
        </div>
        <div class="Seccion"><a name="ClassificacionGeneral"></a>
           <h1 class="titulo1">Classificación general</h1>
           <table class="centerTable" id="ClassGeneral">
               <tr>
                   <th>FAMILIA</th>
                   <th>GENERO</th>
                   <th>NUMERO DE ESPECIES</th>
                   <th>ORIGEN</th>
               </tr>
               <tr>
                   <td>Bromeliaceae</td>
                   <td>Brocchinia</td>
                   <td>1</td>
                   <td>Guyana, Venezuela</td>
               </tr>
               <tr>
                   <td>Byblidaceae</td>
                   <td>Byblis</td>
                   <td>2</td>
                   <td>Australia</td>
               </tr>
               <tr>
                   <td>Cephalotaceae</td>
                   <td>Cephalotus</td>
                   <td>1</td>
                   <td>Australia</td>
               </tr>
               <tr>
                   <td>Dioncophyllaceae</td>
                   <td>Triphyophyllum</td>
                   <td>1</td>
                   <td>África Occidental</td>
               </tr>
               <tr>
                   <td>Droseraceae</td>
                   <td>Aldrovanda</td>
                   <td>1</td>
                   <td>Europa, África, India, Japón</td>
               </tr>
               <tr>
                   <td></td>
                   <td>Dionaea</td>
                   <td>1</td>
                   <td>Carolina(Estados Unidos)</td>
               </tr>
               <tr>
                   <td></td>
                   <td>Drosera</td>
                   <td>130</td>
                   <td>Todo el mundo</td>
               </tr>
               <tr>
                   <td></td>
                   <td>Drosophyllum</td>
                   <td>1</td>
                   <td>Portugal, España y Marruecos</td>
               </tr>
               <tr>
                   <td>Lentibulariaceae</td>
                   <td>Biovularia</td>
                   <td>2</td>
                   <td>Sudamérica, Cuba</td>
               </tr>
               <tr>
                   <td></td>
                   <td>Genlisea</td>
                   <td>35</td>
                   <td>África, Sudamérica</td>
               </tr>
               <tr>
                   <td></td>
                   <td>Pinguicula</td>
                   <td>50</td>
                   <td>Asia, América, Europa</td>
               </tr>
               <tr>
                   <td></td>
                   <td>Polypompholyx</td>
                   <td>2</td>
                   <td>Australia</td>
               </tr>
               <tr>
                   <td></td>
                   <td>Utricularia</td>
                   <td>300</td>
                   <td>Todo el mundo</td>
               </tr>
               <tr>
                   <td>Nepenthaceae</td>
                   <td>Nepenthes</td>
                   <td>85</td>
                   <td>Sureste de Asia, Madagascar</td>
               </tr>
               <tr>
                   <td>Sarraceniaceae</td>
                   <td>Darlingtonia</td>
                   <td>1</td>
                   <td>California, Oregón(Estados Unidos)</td>
               </tr>
               <tr>
                   <td></td>
                   <td>Heliamphora</td>
                   <td>6</td>
                   <td>Guyana, Venezuela</td>
               </tr>
               <tr>
                   <td></td>
                   <td>Sarracenia</td>
                   <td>9</td>
                   <td>Estados Unidos, Canadá</td>
               </tr>
           </table>
        </div>
        <div class="Seccion"><a name="TiposDeTrampas"></a>
           <h1 class="titulo1">Tipos de trampas</h1>
           <h3>Trampas Pasivas</h3>
           <br>
           <h4>Ascidos</h4>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio quaerat minima ea eius tempore eveniet at sed dolore similique illo nihil ex, necessitatibus doloribus voluptatibus non dolor id perspiciatis inventore officia fugit quis. Deserunt id vero unde et voluptas voluptate inventore, maxime, quam hic ab facilis veniam quas animi dolores nisi, molestias ipsam culpa nulla, harum excepturi natus! Blanditiis, esse eveniet vero ipsa, excepturi suscipit nemo autem nulla ab error mollitia voluptatem! Ea hic sit delectus animi voluptatibus, quia optio, autem, soluta, error sint impedit! Fugit ab molestiae quisquam reiciendis aspernatur voluptatem facilis quis laudantium officia doloribus, sapiente, ea aperiam!</p>
           <h4>Viscosas</h4>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ab animi maxime vitae sint odit! Ratione dolore porro ipsum iure. Reiciendis enim harum ab, reprehenderit a similique placeat optio amet quaerat iure tempora provident, laudantium earum nostrum architecto officia consectetur sint nulla. Quam tenetur, doloribus esse natus consequatur maiores deserunt voluptas itaque voluptates commodi repudiandae? Temporibus iusto tempore labore ipsum recusandae, vitae velit iste eius officiis nisi dignissimos dolores est.</p>
           <h4>De nasa</h4>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, voluptatum soluta numquam ducimus dolorum earum quisquam nemo praesentium sequi? Quam temporibus officia nostrum cupiditate. Quaerat minus, assumenda error, reiciendis exercitationem culpa eveniet ad nulla possimus excepturi id earum dolor maxime et quia, velit voluptas ullam eum maiores. Deserunt placeat impedit eaque, fugiat, tenetur pariatur modi enim aliquid aliquam quia aperiam neque iure vel eius, harum autem sunt. Perspiciatis corporis unde eius, soluta quaerat suscipit, adipisci blanditiis!</p>
           <h3>Trampas Activas</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam labore, eos accusamus fuga unde impedit at id molestias debitis officia asperiores commodi minima dicta, deserunt rem soluta, est, aut sed quaerat qui! Nulla fuga aspernatur officiis at id, numquam itaque! Culpa consequuntur corporis, dolorem dignissimos quae facere debitis recusandae tenetur voluptatem, suscipit aliquid perspiciatis dicta modi odit quos, ad necessitatibus asperiores, quis libero. Consequatur ullam itaque nam optio corporis dignissimos, ratione, incidunt sequi molestiae inventore praesentium. Dolore, similique repudiandae quis voluptate voluptatibus rerum, ipsum ea itaque nisi, nobis omnis earum. Aliquam ab deleniti debitis. Odio sed porro nisi eius soluta ut repellat nemo, quam excepturi adipisci repellendus mollitia, necessitatibus totam eveniet voluptas expedita numquam alias quae consequatur eaque illum. Reprehenderit, rerum sint repellat officiis? Nihil consectetur, ea, tempora veritatis animi officia aperiam, possimus doloremque ut praesentium totam in. Voluptates vero illo id beatae eius ullam rem quis, doloremque delectus inventore.</p>
           <h3>De succion</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet recusandae doloremque laborum, sequi fugit sit aliquid ratione, delectus molestias id harum a atque numquam neque maxime! Et sequi quas ex quis provident ducimus laboriosam laudantium doloribus, libero neque, quisquam, beatae nobis asperiores suscipit laborum rerum eligendi aliquam assumenda placeat quos. Ex ratione accusamus, labore facilis maiores, omnis? Nostrum, iste vero quia rerum ex facere quaerat ab minus obcaecati ullam perferendis nobis recusandae sint, mollitia error libero, est veniam velit!</p>
           <h3>De mandibula</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quaerat perferendis temporibus sint assumenda beatae et optio earum, aliquid, totam culpa voluptas ab fugiat rerum quis corporis placeat itaque! Provident quasi repellat illum voluptate nemo laudantium possimus quisquam eaque aspernatur, iusto expedita sapiente et voluptatem vitae officia blanditiis quo aliquam! Esse aliquid reiciendis repudiandae, cum, odit incidunt veniam distinctio sunt totam vitae ducimus perspiciatis magni facere at ut voluptas voluptatibus adipisci laborum inventore fugiat error eligendi repellat! Quas quasi quos quis commodi et. Maxime aliquam, fugiat architecto eum repellendus illo corporis laudantium impedit esse nam accusantium vitae neque accusamus laborum.</p>
        </div>
        <div class="Seccion"><a name="Enfermedades"></a>
           <h1 class="titulo1">Enfermedades</h1>
           <h3>1. Pulgones</h3>
           <p><img class="pos2" src="img/Principiantes/301.PNG">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed praesentium rem tempore in suscipit provident sint, laudantium debitis, repellendus sapiente deserunt odit veniam fugiat earum tenetur laborum? Sed repellat, sit rem maxime ea quisquam delectus inventore incidunt non nisi ex magnam dolorem vero, quas esse vel autem architecto obcaecati. Fugiat nulla, consequuntur eligendi quia in corporis consequatur repudiandae inventore saepe perferendis magnam provident voluptatum veniam deserunt aliquid est aperiam quos iusto officiis ullam! Ipsa consequuntur, officiis repudiandae ad animi dolorum.</p>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quasi eveniet consequuntur blanditiis ad. Fugiat minus obcaecati, sint, est quasi inventore voluptatum perspiciatis corporis soluta excepturi facilis at quibusdam numquam odit id voluptate eaque eos commodi mollitia quaerat tempora! Rerum?</p>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor natus animi facere dolore placeat earum nisi eum, sequi odit soluta quo nemo neque, rerum suscipit, doloribus unde dolorum itaque optio, repellat quam? Nulla debitis labore dicta sed sint corporis accusantium similique praesentium. Maxime id animi, totam perspiciatis! Aliquid perferendis mollitia sit cumque quia ullam dolore illum odit quasi obcaecati. Sapiente!</p>
           <h4>Directos</h4>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum cum ratione, mollitia placeat aliquid vitae et odit non doloribus molestiae sed rem, quia, deleniti nesciunt. Tenetur officiis iste magni pariatur.</p>
           <h4>Indirectos</h4>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis minus tempore doloremque possimus delectus distinctio quos placeat nulla error beatae voluptatum veniam repellat mollitia, laboriosam quis voluptatibus, nihil, nesciunt atque.</p>
           
           <h3>2. Mosca blanca</h3>
           <p><img class="pos2" src="img/Principiantes/302.PNG">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed praesentium rem tempore in suscipit provident sint, laudantium debitis, repellendus sapiente deserunt odit veniam fugiat earum tenetur laborum? Sed repellat, sit rem maxime ea quisquam delectus inventore incidunt non nisi ex magnam dolorem vero, quas esse vel autem architecto obcaecati. Fugiat nulla, consequuntur eligendi quia in corporis consequatur repudiandae inventore saepe perferendis magnam provident voluptatum veniam deserunt aliquid est aperiam quos iusto officiis ullam! Ipsa consequuntur, officiis repudiandae ad animi dolorum.</p>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quasi eveniet consequuntur blanditiis ad. Fugiat minus obcaecati, sint, est quasi inventore voluptatum perspiciatis corporis soluta excepturi facilis at quibusdam numquam odit id voluptate eaque eos commodi mollitia quaerat tempora! Rerum?</p>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor natus animi facere dolore placeat earum nisi eum, sequi odit soluta quo nemo neque, rerum suscipit, doloribus unde dolorum itaque optio, repellat quam? Nulla debitis labore dicta sed sint corporis accusantium similique praesentium. Maxime id animi, totam perspiciatis! Aliquid perferendis mollitia sit cumque quia ullam dolore illum odit quasi obcaecati. Sapiente!</p>
           <h4>Directos</h4>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum cum ratione, mollitia placeat aliquid vitae et odit non doloribus molestiae sed rem, quia, deleniti nesciunt. Tenetur officiis iste magni pariatur.</p>
           <h4>Indirectos</h4>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis minus tempore doloremque possimus delectus distinctio quos placeat nulla error beatae voluptatum veniam repellat mollitia, laboriosam quis voluptatibus, nihil, nesciunt atque.</p>
           
           <h3>3. Cochinillas</h3>
           <p><img class="pos2" src="img/Principiantes/303.PNG">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos illo tempora impedit porro sint, perferendis magni alias fugit sequi labore nisi. Fugiat, distinctio, debitis aliquid deleniti dicta natus eius? Error perferendis consectetur assumenda sit id iste amet unde veritatis, enim laboriosam suscipit, vero officiis pariatur iure non nesciunt culpa facilis minus asperiores aspernatur aliquam reprehenderit optio? Temporibus officiis, cum repellat molestias nihil, nemo beatae reiciendis dolores, corporis fugiat doloribus consectetur.</p>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quasi eveniet consequuntur blanditiis ad. Fugiat minus obcaecati, sint, est quasi inventore voluptatum perspiciatis corporis soluta excepturi facilis at quibusdam numquam odit id voluptate eaque eos commodi mollitia quaerat tempora! Rerum?</p>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor natus animi facere dolore placeat earum nisi eum, sequi odit soluta quo nemo neque, rerum suscipit, doloribus unde dolorum itaque optio, repellat quam? Nulla debitis labore dicta sed sint corporis accusantium similique praesentium. Maxime id animi, totam perspiciatis! Aliquid perferendis mollitia sit cumque quia ullam dolore illum odit quasi obcaecati. Sapiente!</p>
           
           <h3>4. Botritis o moho gris</h3>
           <p><img class="pos2" src="img/Principiantes/304.PNG">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos illo tempora impedit porro sint, perferendis magni alias fugit sequi labore nisi. Fugiat, distinctio, debitis aliquid deleniti dicta natus eius? Error perferendis consectetur assumenda sit id iste amet unde veritatis, enim laboriosam suscipit, vero officiis pariatur iure non nesciunt culpa facilis minus asperiores aspernatur aliquam reprehenderit optio? Temporibus officiis, cum repellat molestias nihil, nemo beatae reiciendis dolores, corporis fugiat doloribus consectetur.</p>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ipsa, fugiat sunt exercitationem illo veritatis. Quidem cupiditate provident vitae sequi odio dolor tenetur libero quas porro, numquam voluptatem, sed, vero. Fugit eaque sequi velit eveniet, autem tenetur. Neque ipsa tenetur explicabo eaque, temporibus non reprehenderit deleniti animi veniam delectus recusandae.</p>
           
           <h3>5. Acaros o arañas roja</h3>
           <p><img class="pos2" src="img/Principiantes/305.PNG">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos illo tempora impedit porro sint, perferendis magni alias fugit sequi labore nisi. Fugiat, distinctio, debitis aliquid deleniti dicta natus eius? Error perferendis consectetur assumenda sit id iste amet unde veritatis, enim laboriosam suscipit, vero officiis pariatur iure non nesciunt culpa facilis minus asperiores aspernatur aliquam reprehenderit optio? Temporibus officiis, cum repellat molestias nihil, nemo beatae reiciendis dolores, corporis fugiat doloribus consectetur.</p>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quasi eveniet consequuntur blanditiis ad. Fugiat minus obcaecati, sint, est quasi inventore voluptatum perspiciatis corporis soluta excepturi facilis at quibusdam numquam odit id voluptate eaque eos commodi mollitia quaerat tempora! Rerum?</p>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor natus animi facere dolore placeat earum nisi eum, sequi odit soluta quo nemo neque, rerum suscipit, doloribus unde dolorum itaque optio, repellat quam? Nulla debitis labore dicta sed sint corporis accusantium similique praesentium. Maxime id animi, totam perspiciatis! Aliquid perferendis mollitia sit cumque quia ullam dolore illum odit quasi obcaecati. Sapiente!</p>
        </div>
<!--
        <div class="Atriculo"><a name="Estratificacion"></a>
           <h1 class="titulo">Estratificacion</h1>
        </div>
        <div class="Atriculo"><a name="GerminacionSemillas"></a>
           <h1 class="titulo">Germinación semillas</h1>
        </div>
        <div class="Atriculo"><a name="Hibernacion"></a>
           <h1 class="titulo">Hibernación</h1>
        </div>
-->
        <div class="Seccion" id="Sustratos"><a name="Sustratos"></a>
            <h1 class="titulo1">Sustratos</h1>
           
            <div class="art1" id="turbaRubia">
                <div class="info_art1">
                    <h4>TURBA RUBIA</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit culpa excepturi debitis necessitatibus assumenda sed temporibus deserunt cumque dolores earum obcaecati asperiores voluptates dolorum expedita qui, pariatur, enim, ut laborum.</p>
                </div>
            </div>
            <div class="art1" id="musgoSphagnum">
                <div class="info_art1">
                    <h4>MUSGO SPHAGNUM</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit culpa excepturi debitis necessitatibus assumenda sed temporibus deserunt cumque dolores earum obcaecati asperiores voluptates dolorum expedita qui, pariatur, enim, ut laborum.</p>
                </div>
            </div>
            <div class="art1" id="perlita">
                <div class="info_art1">
                    <h4>PERLITA</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit culpa excepturi debitis necessitatibus assumenda sed temporibus deserunt cumque dolores earum obcaecati asperiores voluptates dolorum expedita qui, pariatur, enim, ut laborum.</p>
                </div>
            </div>
            <div class="art1" id="arenaCuarzo">
                <div class="info_art1">
                    <h4>ARENA DE CUARZO</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit culpa excepturi debitis necessitatibus assumenda sed temporibus deserunt cumque dolores earum obcaecati asperiores voluptates dolorum expedita qui, pariatur, enim, ut laborum.</p>
                </div>
            </div>
            <div class="art1" id="arlita">
                <div class="info_art1">
                    <h4>ARLITA</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit culpa excepturi debitis necessitatibus assumenda sed temporibus deserunt cumque dolores earum obcaecati asperiores voluptates dolorum expedita qui, pariatur, enim, ut laborum.</p>
                </div>
            </div>
            <div class="art1" id="vermiculita">
                <div class="info_art1">
                    <h4>VERMICULITA</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit culpa excepturi debitis necessitatibus assumenda sed temporibus deserunt cumque dolores earum obcaecati asperiores voluptates dolorum expedita qui, pariatur, enim, ut laborum.</p>
                </div>
            </div>
            <div class="art1" id="cortezaPino">
                <div class="info_art1">
                    <h4>CORTEZA DE PINO</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit culpa excepturi debitis necessitatibus assumenda sed temporibus deserunt cumque dolores earum obcaecati asperiores voluptates dolorum expedita qui, pariatur, enim, ut laborum.</p>
                </div>
            </div>
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