<?php 
    include_once dirname(__FILE__)."/module/bdConnection.php";

    $registerDate = date("Y-m-d H:i:s");
    $statement = $PDO->prepare('INSERT INTO users(email , name , lastname , password , town , postal , address , active , updated) VALUES(:varMail, :varName , :varLastName , :varPassword , :varTown , :varPostal , :varAddress , 1 ,\''.$registerDate.'\');');
    $statement->bindParam('varMail' , $_POST['mailAddress'] , PDO::PARAM_STR , 255);
    $statement->bindParam('varName' , $_POST['name'] , PDO::PARAM_STR , 255);
    $statement->bindParam('varLastName' , $_POST['surname'] , PDO::PARAM_STR , 255);
    $statement->bindParam('varPassword' , $_POST['password'] , PDO::PARAM_STR , 255);
    $statement->bindParam('varTown' , $_POST['city'] , PDO::PARAM_STR , 255);
    $statement->bindParam('varPostal' , $_POST['postalCode'] , PDO::PARAM_STR , 255);
    $statement->bindParam('varAddress' , $_POST['postalAddress'] , PDO::PARAM_STR , 255);

    $statement->execute();
    header("location: /index.php");
?>