

<?php
session_start();
if(isset( $_SESSION["auth"])){
    header("Location: /auth/admin.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <title>Вход в админ панель</title>
</head>
<body class="admin-body-login">
    <div class="center">
    <form action="logic/login" method="POST">
        <input type="text" name="username" placeholder="Логин">
        <input type="password" name="password" placeholder="Пароль"><br>
        <button type=submit>Войти</button>
    </form>
    </div>

</body>
</html>
