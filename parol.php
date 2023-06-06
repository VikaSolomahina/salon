<?php
// стартуем сессии, для того чтобы мы могли пользоваться глобальным массивом SESSION, для передачи ошибок
session_start();
require_once("./db/db.php");
header( "refresh:4;url=index.php" );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<style>
body {
	background-image: url("фон авторизации.jpg");
    background-size: cover;
    
} 
h1 {
opacity: 0;
animation: ani 3s forwards;
}

@keyframes ani {
0% {opacity: 0;}
100% {opacity: 1;}
}
</style>
<body>
    
    <div style="margin: 190px 0 0 240px; " class="form">
    <br>
    <h1 style="color:rgb(219, 217, 217); font-family: Monotype Corsiva;text-shadow:1px 1px #000,2px 2px #000;">Неверный логин или пароль</h1>
    <h1 style="color:rgb(219, 217, 217); font-family: Monotype Corsiva;text-shadow:1px 1px #000,2px 2px #000;padding-left: 30px;">Попробуйте еще раз</h1>
    <?php 
    
    ?>
    
</body>
</html>