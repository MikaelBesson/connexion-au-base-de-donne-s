<?php

require 'version-objet.php';
require './version-static.php';
require './Classes/Utilisateurs.php';
require './Classes/Clients.php';

require './Classes/Utilisateurs-static.php';
require './Classes/Clients-static.php';



//Creation de la connexion a la base de donneés
$database = new DB('localhost','live','root','');
$link = $database->getDbLink();


$utilisateurs = new Utilisateurs($link);
$clients = new Clients($link);

$utilisateursStatic = new UtilisateursStatic();
$clientsStatic = new ClientsStatic();



