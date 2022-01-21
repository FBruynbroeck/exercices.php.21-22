<?php
function getDB() {
    //PDO: PHP Data Objects
    $bdd = new PDO('mysql:host=host.docker.internal;dbname=cours;charset=utf8', 'root', 'password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

function getUserByLogin($login){
    $reponse = getDB()->prepare('SELECT * FROM user WHERE login = :login');
    $reponse->execute([':login' => $login]);
    $user = $reponse->fetch();
    $reponse->closeCursor(); // Termine le traitement de la requête
    return $user;
}

function getUsers(){
    $reponse = getDB()->prepare('SELECT * FROM user');
    $reponse->execute();
    $users = $reponse->fetchAll();
    $reponse->closeCursor(); // Termine le traitement de la requête
    return $users;
}

?>
