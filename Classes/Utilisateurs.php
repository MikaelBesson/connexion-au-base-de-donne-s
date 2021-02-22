<?php

class Utilisateurs {

    private PDO $database;

    public function __construct(PDO $database){
        $this->database = $database;

    }
    public function getUtilisateurs(){
        //TODO aller chercher les utilisateur en base de donneés.
    }
}

