<?php ob_start();?>
<h2>Description</h2>
<br>
<p class="lead">
Page d'accueil des exercices du cours.<br>
Sélectionne l'exercice souhaité dans le menu.<br>
Le site utilise la version 5.1.1 de Bootstrap.
</p>

<?php
$title = 'Exercices php';
$content = ob_get_clean();
include('template.php');
?>
