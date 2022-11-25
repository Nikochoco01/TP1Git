<?php 
    include_once dirname(__FILE__)."/module/bdConnection.php";

    $pictureName = '/'.$_POST['articleTitle'] . ".png";
    move_uploaded_file($_FILES['picture']['tmp_name'], __DIR__.$pictureName);

    // echo $_FILES['picture'];

    $registerDate = date("Y-m-d H:i:s");

        // function traitementPhoto(){
        //     echo '<img src="/photoTMP.png" alt="photo que voujs avez envoyé">';
        // }
       // echo $_POST['articleTitle'];

    $statement = $PDO->prepare("INSERT INTO Articles(articleName , authorName , authorSurName , authorMail , dateArticle , description , picture , articleContent) VALUES(:varArticleName , :varName , :varSurname , :varMail ,'2022-11-23' , :varDescription , :varPicture , :varArticleContent);");
    $statement->bindParam('varArticleName', $_POST['articleTitle'] , PDO::PARAM_STR , 255);
    $statement->bindParam('varName' , $_POST['name'] , PDO::PARAM_STR , 255);
    $statement->bindParam('varSurname' , $_POST['surname'] , PDO::PARAM_STR , 255);
    $statement->bindParam('varMail' , $_POST['mailAddress'] , PDO::PARAM_STR , 255);
    $statement->bindParam('varDescription' , $_POST['description'] , PDO::PARAM_STR , 255);
    $statement->bindParam('varPicture', $pictureName , PDO::PARAM_STR , 255);
    $statement->bindParam('varArticleContent', $_POST['blog'] , PDO::PARAM_STR , 255);

    $statement->execute();
    header("location: /blog.php");
?>