<?php ob_start();?>

<form action="welcome.php" method="get">
    Sexe:
    <input id="idsexeh" type="radio" name="sexe" value="H">
    <label for="idsexeh">Homme</label>
    <input id="idsexef" type="radio" name="sexe" value="F">
    <label for="idsexef">Femme</label>
    <br>
    <label for="idprenom">Prénom:</label>
    <input id="idprenom" type="text" name="prenom">
    <input type="submit">
</form>

<?php
$title = 'Exercice 3';
$content = ob_get_clean();
include('../template.php');
?>
