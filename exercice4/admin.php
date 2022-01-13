<?php
session_start();
if(empty($_SESSION['login'])){
    header('Location: /exercice4');
    exit();
}
$title = 'Exercice 4 - Administration';
$content = 'Vous êtes sur la page d\'administration';
include('../template.php');
?>
