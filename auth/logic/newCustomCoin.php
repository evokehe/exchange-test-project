<?php 
require_once "../../logic/config.php";

$new_pair = $pdo->prepare("INSERT INTO customCoins (coin,rate) VALUES (:coin,:rate)");
$new_pair->execute([
    ':coin'=> $_POST["coin"],
    ':rate'=>(float)$_POST["rate"],
]);
header("Location: /auth/customCoins.php");
die();
?>