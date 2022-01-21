<?php
include 'models/users.php';
if(empty($_SESSION['login'])){
    header("Location: ".ROOT_PATH);
    exit();
}
if(REQ_TYPE_ID){
    $user = getUserByLogin(REQ_TYPE_ID);
    if($user){
        include 'views/user.php';
        exit();
    }
    else {
        http_response_code(404);
        include 'views/404.php';
        exit();
    }
}
else {
    $users = getUsers();
    include 'views/users.php';
    exit();
}
?>
