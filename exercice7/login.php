<?php
session_start();
if(!empty($_SESSION['login']))
{
    header('Location: /exercice7');
    exit();
}

if(!empty($_POST['login']) && !empty($_POST['password'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=cours;charset=utf8', 'root', 'password');
    $reponse = $bdd->query('SELECT * FROM USER WHERE login = "'.$_POST['login'].'"');
    $user = $reponse->fetch();
    if($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['login'] = $user['login'];
        header('Location: /exercice7');
        exit();
    }
}

//if(!empty($_POST['login']) && !empty($_POST['password'])) {
//    $bdd = new PDO('mysql:host=localhost;dbname=cours;charset=utf8', 'root', 'password');
//        " union select 1,"test","$2y$10$u1OvIlD2JuKPeB4BEa67feKnQsOsZ47L0b8ZRM.toilA0ir/.Xc6e",1,1,1;--
//    $reponse = $bdd->query('SELECT * FROM USER WHERE login = "'.$_POST['login'].'"');
//    $user = $reponse->fetch();
//    print_r($user);
//    if($user && password_verify($_POST['password'], $user['password'])) {
//        $_SESSION['login'] = $user['login'];
//        header('Location: /exercice7');
//        exit();
//    }
//}

ob_start();?>
<form action="" method="POST">
    <div class="form-group">
        <label for="idlogin">Login</label>
        <input type="text" class="form-control" id="idlogin" name="login">
    </div>
    <div class="form-group">
        <label for="idpassword">Password</label>
        <input type="password" class="form-control" id="idpassword" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
$title = "Se connecter";
$content = ob_get_clean();
include("../template.php");
?>
