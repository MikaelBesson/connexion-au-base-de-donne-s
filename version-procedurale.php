<?php

try {
    $server ='localhost';
    $db = 'live';
    $user ='root';
    $pass ='';

    $bdd = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pass);
    $bdd->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Nous somme connectés a la base de données.";
}
catch(PDOException $exception){
    echo $exception->getMessage();
}

