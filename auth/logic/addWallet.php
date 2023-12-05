<?php
require_once "../../logic/config.php";
$new_wallet = $pdo->prepare("INSERT INTO wallets (coin,wallet,coinName,forSend,forReceive) VALUES (:coin,:wallet,:coinName,:forSend,:forReceive)");
$new_wallet->execute([
    ':coin'=> $_POST["coin"],
    ':wallet'=> $_POST["wallet"],
    ':coinName'=> $_POST["coinName"],
    ':forSend'=> $_POST["forSend"] == "forSend"? 1 : 0,
    ':forReceive'=> $_POST["forReceive"] == "forReceive"? 1 : 0,
]);

header("Location: /auth/wallets.php");
die();
?>
