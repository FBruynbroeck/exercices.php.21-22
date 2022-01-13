<?php
ob_start();

//PDO: PHP Data Objects
$bdd = new PDO('mysql:host=localhost;dbname=cours;charset=utf8', 'root', 'password');

$reponse = $bdd->query('SELECT * FROM USER');

//print_r($reponse);
//reponse est un objet PDOStatement (voir doc)

//avec fetch

while ($donnees = $reponse->fetch())
{
    echo "ID: ".$donnees['id'];
    echo '<br>';
    echo "LOGIN: ".$donnees['login'];
    echo '<br>';
    echo "PASSWORD: ".$donnees['password'];
    echo '<br>';
}
$reponse->closeCursor(); // Termine le traitement de la requête

echo '<br>';
$reponse = $bdd->query('SELECT * FROM USER');
//avec fetchAll

echo '<br>';
foreach($reponse->fetchAll() as $donnees){
    echo "ID: ".$donnees['id'];
    echo '<br>';
    echo "LOGIN: ".$donnees['login'];
    echo '<br>';
    echo "PASSWORD: ".$donnees['password'];
}
$reponse->closeCursor(); // Termine le traitement de la requête
echo '<br>';

// query => Exécute une query SQL et retourne un jeu de résultats en tant qu'objet PDOStatement
$login = 'admin';
$reponse = $bdd->query('SELECT * FROM USER WHERE login = "'.$login.'"');
echo '<br>';
echo print_r($reponse->fetch());
echo '<br>';
// prepare => prépare une query SQL et retourne un objet PDOStatement (la query n'est pas exécuter. il faut faire appel à la méthode execute pour cela)
$reponse = $bdd->prepare('SELECT * FROM USER WHERE login = :login');
// execute => exécute une query préparée (méthode à exécuter sur un objet PDOStatement)
$reponse->execute(array(':login' => 'admin'));
echo '<br>';
echo print_r($reponse->fetchAll());
echo '<br>';
$reponse->execute(array(':login' => 'toto'));
echo '<br>';
echo print_r($reponse->fetchAll());
echo '<br>';

// exec => Exécute une query SQL et retourne le nombre de lignes affectées (ne pas utiliser pour du select)
//echo $bdd->exec('UPDATE USER SET login = \'admin\' WHERE login = \'test\'');


$title = 'Exercice 6';
$content = ob_get_clean();
include('../template.php');
?>
