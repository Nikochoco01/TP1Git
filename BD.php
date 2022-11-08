<?php 
$sdn = 'sqlite:database.db';

try{
    $pdo = new PDO($sdn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );
}
catch(PDOException $e){
    echo "connection échouée : ". $e->getMessage();
}

// echo " connection réussi" ."\n";


$update = "update users SET updated= '" . date("Y-m-d H:i:s") . "';";

// if(isset($pdo)){
//     $count = $pdo->exec($update);
//     echo $count ." lignes ont été changer.";
// }

// $selectUser = 'select email , password from users where ';

$statement = $pdo->prepare("select * from users where email=:varMail and password=:varPassWord");
$statement->execute([
    'varMail' => $_POST['user'],
    'varPassWord' => $_POST['passWord']
]);

$user = $statement->fetchAll();
if(isset($user)){
    session_start();
    $_SESSION['user'] = $user[0]["name"];
    $_SESSION['passWord'] = $user[0]["password"];
    $_SESSION['email'] = $user[0]["email"];
    // $_SESSION['admin'] = true;
    header("location: /accueil.php");
}

// var_dump($user);
// var_dump($user[0]["name"]);

// if(isset($pdo)){
//     foreach ($pdo->query($selectUser) as $row) {
//         echo $row['email'] . "\t";
//         echo $row['password'] . "\t";
//         // echo $row['calories'] . "\n";
//         }
// }
?>