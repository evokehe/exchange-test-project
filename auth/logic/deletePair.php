<?php 
require_once "../../logic/config.php";

$delete_pair = $pdo->prepare("DELETE FROM pairs  WHERE Id ='" .$_POST["pairId"] ."'");
$delete_pair->execute();

header("Location: /auth/pairs.php");
die();
?>