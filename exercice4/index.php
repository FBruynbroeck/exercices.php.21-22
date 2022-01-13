<?php
session_start();
$title = 'Exercice 4';
if(empty($_SESSION['login']))
{
    $content = "<a href=\"login.php\">S'identifier</a>";
}else {
    $content = "Bonjour ".$_SESSION['login']."<br><a href=\"logout.php\">Se déconnecter</a>";
}
include('../template.php');
?>
