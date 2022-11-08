<?php
$user = "admin";
$passWord = "test";

if($_POST['user'] === $user && $_POST['passWord'] === $passWord){
    session_start();
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['passWord'] = $_POST['passWord'];
    $_SESSION['admin'] = true;
    header("location: /accueil.php");
}
?>