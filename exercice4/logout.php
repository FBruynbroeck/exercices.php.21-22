<?php
session_start();
if(!empty($_SESSION['login']))
{
    session_unset();
    session_destroy();
}
header("Location: /exercice4");
exit();
?>
