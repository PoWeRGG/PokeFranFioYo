<?php
$loginOk = "id";
$passwordOk = "mdp";

if($_POST['login'] != $loginOk || $_POST['password'] != $passwordOk)
{
    header("Location:connection.php");
}
else
{
    session_start();
    $_SESSION['login'] = $_POST['login'];
    header("Location:index.php");
}
?>