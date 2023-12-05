<?php 
require_once "../../logic/config.php";

$delete_pair = $pdo->prepare("DELETE FROM customCoins  WHERE Id ='" .$_POST["coinId"] ."'");
$delete_pair->execute();

header("Location: /auth/customCoins.php");
die();
?>