<?php
session_start();
$_SESSION['login'] = 'FakeUser';
$title = 'Exercice 4';
$content = 'Alimentation de la session effectuée';
include('../template.php');
?>
