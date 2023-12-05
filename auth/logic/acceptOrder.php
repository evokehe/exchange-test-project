<?php 

require_once "../../logic/config.php";

$update = $pdo->prepare("UPDATE orders SET accepted = 1 WHERE transactionId ='".$_POST["transactionId"]."'");
$update->execute([]);

header("Location: /auth/orders.php");
die();
?>