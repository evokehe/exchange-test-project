<?php
require_once '../../logic/config.php';
// var_dump($_POST);
session_start();
$username = $_POST['username'];
$password = $_POST['password'];




$user = $pdo->prepare("SELECT * FROM users where username = :username");
$user->execute([
    ":username" => $username,
]);

$user = $user->fetch();

if(!$user){
header("Location: /auth/login");
}
else{

    if(password_verify($password,$user["password"])){
        $_SESSION["auth"] = true;
         header("Location: /auth/admin");
    }
    else{
        header("Location: /auth/login");

    }

}
