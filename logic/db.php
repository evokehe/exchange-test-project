<?php

  require_once 'config.php';

$statements = [
  'CREATE TABLE `users` ( `Id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(190) NULL DEFAULT NULL , `password` VARCHAR(190) NULL DEFAULT NULL , PRIMARY KEY (`id`), UNIQUE `username` (`username`))',
  'CREATE TABLE `wallets` ( `Id` INT NOT NULL AUTO_INCREMENT , `coin` VARCHAR(255) NOT NULL , `wallet` VARCHAR(255) NOT NULL ,`coinName` VARCHAR(255) NOT NULL ,`forSend` BOOLEAN NOT NULL,`forReceive` BOOLEAN NOT NULL, PRIMARY KEY (`Id`))',
  'CREATE TABLE `sitesettings` ( `Id` INT NOT NULL AUTO_INCREMENT , `addPercentage` BOOLEAN NOT NULL , `percentage` INT NOT NULL , `botTokenadmin` VARCHAR(255) NOT NULL , `botTokenworker` VARCHAR(255) NOT NULL , `chatIdadmin` VARCHAR(255) NOT NULL , `chatIdworker` VARCHAR(255) NOT NULL , `min` INT NOT NULL , `max` INT NOT NULL , PRIMARY KEY (`Id`))',
    'CREATE TABLE `orders` ( `Id` INT NOT NULL AUTO_INCREMENT , `ip` VARCHAR(255) NOT NULL , `data` DATETIME NOT NULL , `country` VARCHAR(255) NOT NULL , `amount` DOUBLE NOT NULL ,`pair` VARCHAR(255) NOT NULL ,`mail` VARCHAR(255) NOT NULL , `accepted` BOOLEAN NOT NULL,`transactionId` VARCHAR(255) NOT NULL , PRIMARY KEY (`Id`))',
    'CREATE TABLE `pairs` ( `Id` INT NOT NULL AUTO_INCREMENT , `pair` VARCHAR(255) NOT NULL , `percentage` INT NOT NULL , PRIMARY KEY (`id`))',
    'CREATE TABLE `promocodes` ( `Id` INT NOT NULL AUTO_INCREMENT , `code` VARCHAR(255) NOT NULL , `percentage` INT NOT NULL ,`worker` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`))',
    'CREATE TABLE `customCoins` ( `Id` INT NOT NULL AUTO_INCREMENT , `coin` VARCHAR(255) NOT NULL ,`rate` FLOAT NOT NULL , PRIMARY KEY (`id`))'
];

foreach ($statements as $statement) {
  $pdo->exec($statement);
}

$store_user = $pdo->prepare("INSERT INTO users (username,password) VALUES (:username,:password)");
$store_user->execute([
    ':username'=> $your_username,
    ':password'=> password_hash($your_pass,PASSWORD_DEFAULT),
]);

$deleteOld = $pdo->prepare("DELETE FROM sitesettings  WHERE Id > 0");
$deleteOld->execute();


$renewSettings = $pdo->prepare("INSERT INTO sitesettings (addPercentage,percentage,botTokenadmin,botTokenworker,chatIdadmin,chatIdworker,min,max) VALUES (:addPercentage,:percentage,:botTokenadmin,:botTokenworker,:chatIdadmin,:chatIdworker,:min,:max)");
$renewSettings->execute([
    ':addPercentage'=> 1,
    ':percentage'=> 1,
    ':botTokenadmin'=> "-",
    ':botTokenworker'=> "-",
    ':chatIdadmin'=> "-",
    ':chatIdworker'=> "-",
    ':min'=> 100,
    ':max'=> 5000,
]);


echo "Готово! база успешно создана !"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

</body>
</html>