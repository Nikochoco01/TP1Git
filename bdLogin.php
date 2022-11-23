<?php 
    include_once dirname(__FILE__)."/module/bdConnection.php";

    $statement = $PDO->prepare("select * from users where email = :userName and password = :userPassword");
    $statement->bindParam('userName' , $_POST['user'] , PDO::PARAM_STR , 255);
    $statement->bindParam('userPassword' , $_POST['passWord'] , PDO::PARAM_STR , 255);
    $statement->execute();

    $user = $statement->fetch();

    if(isset($user)){
        session_start();
        $_SESSION['sessionOpen'] = true;
        $_SESSION['user'] = $user->name;
        $_SESSION['email'] = $user->email;
        header("location: /accueil.php");
    }
?>