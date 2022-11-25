<?php

$_SESSION['alert'] = [
    "type" => 'error',
    "message" => " ceci est une erreur tu n'as rien vu !"
];

if(!empty($_SESSION['alert'])):
?>
    <div class="<?= $_SESSION['type'] ?>">
        <p> <?= $_SESSION['message'] ?> </p>
    </div>
<?php endif ?>