<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Producte {
    protected $codi;
    protected $nom;
    protected $nom_curt;
    protected $PVP;
    
    public function getcodi() {return $this->codi; }
    public function getnom() {return $this->nom; }
    public function getnomcurt() {return $this->nom_curt; }
    public function getPVP() {return $this->PVP; }
    public function mostra() {
      echo "<tr><td>".$this->codi."</td><td>".$this->nom_curt."</td><td>".$this->PVP."€</td></tr>";
    }
    public function __construct($row) {
        $this->codi = $row['cod'];
        $this->nom = $row['nom'];
        $this->nom_curt = $row['nom_curt'];
        $this->PVP = $row['PVP'];
    }
}