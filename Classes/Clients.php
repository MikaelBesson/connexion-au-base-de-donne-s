<?php

class Clients {

    private PDO $database;

    public function __construct(PDO $database){
        $this->database = $database;

    }
    public function getClients(){
        //TODO aller chercher les utilisateur en base de donneés.
    }
}


