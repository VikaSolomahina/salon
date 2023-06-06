<?php 
// Подключаем БД
require_once("./db/db.php");
?>
<link rel="stylesheet" href="main.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Все пользователи</title>
</head>

<body>
    <h2>Все пользователи системы</h2>



    <?php 
    // что принимает функция mysqli_query - $link, это подключение к БД, а SELECT... уже является выборкой из БД
    $select_all = mysqli_query($link, "SELECT * FROM `employees` ORDER BY `id` DESC");

    // превращаем ответ БД в ассоциативный массив, обычный массив или в оба
    $select_all = mysqli_fetch_all($select_all);
    
    // делаем переборку данного массива и выводим его 
    foreach($select_all as $sa) { ?>
        <p>Логин: <strong><?= $sa[1]; ?></strong></p>
        <p>ФИО: <strong><?= $sa[2]; ?></strong></p>
        <p>Роль: <strong><?= $sa[4]; ?></strong></p>
        <p>Номер телефона: <strong><?= $sa[5]; ?></strong></p>
        <br>
        <?php } ?>
</body>
</html>