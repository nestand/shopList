<?php

require_once 'db.php';

class magasin{
    //attributs du magasin
    public $id_magasin;
    public $nom;
    public $contact;

    public function __construct($id_magasin, $nom, $contact){
        $this->id_magasin =$idMag;
        $this->nom = $nomMag;
        $this->contact = $contMag;
    }