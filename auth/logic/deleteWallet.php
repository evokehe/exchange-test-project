<?php 
require_once "../../logic/config.php";

$delete_wallet = $pdo->prepare("DELETE FROM wallets  WHERE Id ='" .$_POST["walletId"] ."'");
$delete_wallet->execute();

header("Location: /auth/wallets.php");
die();
?>