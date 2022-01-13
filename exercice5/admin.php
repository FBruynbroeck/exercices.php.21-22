<?php
session_start();
if(empty($_SESSION['login'])){
    header('Location: /exercice5');
    exit();
}
$title = 'Exercice 5 - Administration';
$content = 'Vous êtes sur la page d\'administration';
include('../template.php');
?>
