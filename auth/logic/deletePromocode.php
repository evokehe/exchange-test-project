<?php
require_once "../../logic/config.php";

$delete_pair = $pdo->prepare("DELETE FROM promocodes  WHERE Id ='" .$_POST["promocodeId"] ."'");
$delete_pair->execute();

header("Location: /auth/promocodes");
die();
?>
