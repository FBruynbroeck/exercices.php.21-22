<?php
if(empty($_GET['sexe']) or empty($_GET['prenom']) ){
    header("Location: /exercice3");
    exit();
}
$title = "Bienvenue";

$civilite = [
    'H' => 'Monsieur',
    'F' => 'Madame'
];
$content = "Bienvenue ".$civilite[$_GET['sexe']]." ".$_GET['prenom'];
include('../template.php');
?>
