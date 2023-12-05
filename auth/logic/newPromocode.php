<?php
require_once "../../logic/config.php";

$new_pair = $pdo->prepare("INSERT INTO promocodes (code,percentage,worker) VALUES (:code,:percentage,:worker)");
$new_pair->execute([
    ':code'=> $_POST["code"],
    ':percentage'=>(int)$_POST["percentage"],
    ':worker'=>$_POST["worker"],
]);
header("Location: /auth/promocodes");
die();
?>
