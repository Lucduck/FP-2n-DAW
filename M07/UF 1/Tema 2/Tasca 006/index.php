<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Apartat 1</title>
	<style>
		#taula{
			border: 1px solid;
			padding: 1px;
			background: gray;
		}
		#taula th, #taula td{
			text-align: center;
			min-width: 100px;
			border: 1px solid;
			padding: 3px;
			background: white;
		}
	</style>
</head>
<body>
	<table id="taula">
		<tr>
			<th>Nom</th>
			<th>Telefon</th>
		</tr>
		
	<?php
	//comprobaciones del nombre i el telefono
	//Mirar si exite agenda.txt, si no existe, crear el arxivo
		
		if (isset($_POST['guardar'])) {
			$nom = $_POST['nom'];
			$telefon = $_POST['telefon'];
			
			if($nom == ""){
				echo "<p style='color:red;'>No s'ha guardat a l'agenda, falta el nom</p>";
			}else{
				$snTelefon = true;
				if($telefon == ""){
					$snTelefon = false;
				}
				//Editanto el arxivo en busqueda si hay alguien con el mismo nombre, y editandolo
				$lineas = file("agenda.txt");
				$filp = fopen("agenda.txt", "w+");
				$snAfegit = false;
				for($i=0; $i<count($lineas); $i++){
					if(substr($lineas[$i],0,strlen($nom))==$nom && substr($lineas[$i],strlen($nom),1) == ";"){
						if($snTelefon){
							fwrite ($filp, $nom . ";" . $telefon .PHP_EOL);
							echo "S'ha editat un numero existent";
						}else{
							echo "S'ha eliminat el numero de " . $nom;
						}
						$snAfegit = true;
					}else{
						fwrite ($filp, $lineas[$i]);
					}
				}
				
				//Si no estaba en la agenda i ha introduit un numero, es guardara
				if(!$snAfegit && $snTelefon){
					fwrite ($filp, $nom . ";" . $telefon .PHP_EOL);
					echo "S'ha afegit un numero nou";
				}
				
			fclose($filp);
			}
		}
		$fileW = fopen ("agenda.txt", "a+");
			$linea = fgets($fileW);
			do{
				$telefon = explode(";", $linea);
				echo "<tr><td>" . $telefon[0] . "</td><td>" . $telefon[1] . "</td></tr>";
				$linea = fgets($fileW);
			}while($linea != "");
			echo "</table>";//Tanco la table
		fclose($fileW);
	?>
	<br>
	<form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		<table>
			<tr>
				<th>Nom:</th>
				<td>
					<input type="text" name="nom" value="<?php if (isset($_POST['guardar']) && $telefon == "") echo $nom;?>"/>
				</td>
			</tr>
			<tr>
				<th>Telefon:</th>
				<td>
					<input type="text" name="telefon" value="<?php if (isset($_POST['guardar']) && $nom == "") echo $telefon;?>"/>
				</td>
			</tr>
			<tr>
				<td></td>
				<td style="text-align:right">
					<input type="submit" value="Guardar" name="guardar"/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>