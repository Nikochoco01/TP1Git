<?php
// if($_POST['user'] === $user && $_POST['passWord'] === $passWord){
//     session_start();
//     $_SESSION['user'] = $_POST['user'];
//     $_SESSION['passWord'] = $_POST['passWord'];
//     $_SESSION['admin'] = true;
//     header("location: /accueil.php");
// }

if(isset($user)){
    session_start();
    $_SESSION['sessionOpen'] = true;
    $_SESSION['user'] = $user[0]["name"];
    $_SESSION['passWord'] = $user[0]["password"];
    $_SESSION['email'] = $user[0]["email"];
    // $_SESSION['admin'] = true;
    header("location: /accueil.php");
}

?>