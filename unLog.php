<?php

if(isset($_SESSION['sessionOpen'])){
    $_SESSION = array();
    session_destroy();
    $pdo = null;
    header('Location: ../index.php');
    Exit();
}
else{
    header('Location: ../index.php');
    Exit();
}

?>