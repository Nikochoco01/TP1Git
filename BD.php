<?php 
$sdn = 'sqlite:database.db';

try{
    $pdo = new PDO($sdn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );
}
catch(PDOException $e){
    echo "connection échouée : ". $e->getMessage();
}

echo " connection réussi" ."\n";


$update = "update users SET updated= '" . date("Y-m-d H:i:s") . "';";

echo var_dump($update);

if(isset($pdo)){
    $count = $pdo->exec($update);
    echo $count ." lignes ont été changer.";
}

?>