<?php
session_start();
if(empty($_SESSION['login']))
{
    header('Location: /exercice7');
    exit();
}
$title = 'Exercice 7 - Administration';
$content = 'Page d\'administration';
include('../template.php');
?>
