<?php 
    include_once dirname(__FILE__)."/module/bdConnection.php";

    $registerDate = date("Y-m-d H:i:s");

    $statement = $PDO->prepare("INSERT INTO messages(subect , name , surname , mail , message , messageDate) VALUES(:varSubject , :varName , :varSurname , :varMail , :varMessage ,'2022-11-23');");
    $statement->bindParam('varSubject', $_POST['subject'] , PDO::PARAM_STR , 255);
    $statement->bindParam('varName' , $_POST['name'] , PDO::PARAM_STR , 255);
    $statement->bindParam('varSurname' , $_POST['surname'] , PDO::PARAM_STR , 255);
    $statement->bindParam('varMail' , $_POST['mailAddress'] , PDO::PARAM_STR , 255);
    $statement->bindParam('varMessage' , $_POST['message'] , PDO::PARAM_STR , 255);

    $statement->execute();
    header("location: /accueil.php");
?>