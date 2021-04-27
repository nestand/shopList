<?php

require_once 'db.php';

class produit{
    //attributs du produit
    public $id_produit;
    public $nom;
    public $prix_unit;

    public function __construct($id_produit, $nom, $prix_unit){
        $this->id_produit = $idProd;
        $this->nom = $nomProd;
        $this->prix_unit = $prixProd;
    }

