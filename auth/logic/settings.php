<?php 
require_once "../../logic/config.php";


$deleteOld = $pdo->prepare("DELETE FROM sitesettings  WHERE Id > 0");
$deleteOld->execute();


$renewSettings = $pdo->prepare("INSERT INTO sitesettings (addPercentage,percentage,botTokenadmin, botTokenworker, chatIdadmin, chatIdworker, min,max) VALUES (:addPercentage,:percentage,:botTokenadmin,:botTokenworker,:chatIdadmin,:chatIdworker,:min,:max)");
$renewSettings->execute([
    ':addPercentage'=> $_POST["percentageAction"] == "add" ? 1 : 0,
    ':percentage'=> (int)$_POST["percentage"],
    ':botTokenadmin'=> $_POST["botTokenadmin"],
    ':botTokenworker'=> $_POST["botTokenworker"],
    ':chatIdadmin'=> $_POST["chatIdadmin"],
    ':chatIdworker'=> $_POST["chatIdworker"],
    ':min'=> $_POST["min"],
    ':max'=> $_POST["max"],
]);

header("Location: /auth/admin.php");
die();
?>