<?php 
require_once "../../logic/config.php";

$new_pair = $pdo->prepare("INSERT INTO pairs (pair,percentage) VALUES (:pair,:percentage)");
$new_pair->execute([
    ':pair'=> $_POST["pair"],
    ':percentage'=>(int)$_POST["percentage"],
]);
header("Location: /auth/pairs.php");
die();
?>