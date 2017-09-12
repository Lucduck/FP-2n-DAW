<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('ProducteClass.php');
class DB {
    protected static function executaConsulta($sql) {
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $dsn = "mysql:host=localhost;dbname=dwes";
        $usuari = 'dwes';
        $contrasenya = 'abc123';
        $dwes = new PDO($dsn, $usuari, $contrasenya, $opc);
        $resultat = null;
        if (isset($dwes)) $resultat = $dwes->query($sql);
            return $resultat;
        }
    public static function obteProductes() {
        $sql = "SELECT cod, nom_curt, nom, PVP FROM producte;";
        $resultat = self::executaConsulta ($sql);
        $productes = array();
        if($resultat) {
        // Añadimos un elemento por cada producto obtenido
        $row = $resultat->fetch();
        while ($row != null) {
            $productes[] = new Producte($row);
            $row = $resultat->fetch();
            }
        }
        return $productes;
    }
    public static function obteProducte($codi) {
        $sql = "SELECT cod, nom_curt, nom, PVP FROM producte";
        $sql .= " WHERE cod='" . $codi . "'";
        $resultat = self::executaConsulta ($sql);
        $producte = null;
        if(isset($resultat)) {
            $row = $resultat->fetch();
            $producte = new Producte($row);
        }
    return $producte;
    }
  
    public static function obteCistella($usuari) {
        $sql = "SELECT Cistella FROM usuaris WHERE usuari = '". $usuari ."'";
        $resultat = self::executaConsulta ($sql);
      
        $cistella = new Cistella();
        if(isset($resultat)) {
          $row = $resultat->fetch(PDO::FETCH_ASSOC);
          if(!empty($row['Cistella']))
            $cistella = unserialize($row['Cistella']);
        }
     
        return $cistella;
    }
    public static function pujaCistella($cistella, $usuari) {
        if($cistella->buida()){
          $cistella = '';
        }else{
          $cistella = serialize($cistella);
        }
      
        $sql = "UPDATE usuaris SET Cistella = '" . $cistella . "' WHERE usuari = '". $usuari ."'";
        self::executaConsulta ($sql);
    }
  
    public static function verificaClient($nom, $contrasenya) {
        $sql = "SELECT usuari FROM usuaris ";
        $sql .= "WHERE usuari='$nom' ";
        $sql .= "AND contrasenya='" . md5($contrasenya) . "';";
        $resultat = self::executaConsulta ($sql);
        $verificat = false;
        if(isset($resultat)) {
            $fila = $resultat->fetch();
            if($fila !== false)
                $verificat=true;
        }
        return $verificat;
    }
}
?>