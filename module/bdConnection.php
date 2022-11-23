<?php 
    try{
        $PDO = new PDO("sqlite:database.db");
        $PDO->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_OBJ);
        //echo "Connexion réussie"."\n";
    }
    catch(PDOException $e){
        echo "Errreur : " . $e->getMessage();
    }
?>