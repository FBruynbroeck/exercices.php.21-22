<?php
session_start();
$title = 'Exercice 7';
if(empty($_SESSION['login']))
{
    $content = "<a href=\"login.php\">S'identifier</a>";
}else {
    $content = "Bonjour ".$_SESSION['login']."<br><a href=\"admin.php\">Page d'administration</a><br><a href=\"logout.php\">Se déconnecter</a>";
}
//$content = password_hash('tata', PASSWORD_DEFAULT);
include('../template.php');
?>
