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
    <title>Меню</title>
    <style type="text/css">
        th,td{
            padding: 10px;
            border: 4px double black;
        }
        th{
            background: rgb(112, 107, 117);
            color: #000;
        }
        td{
            background: rgb(201, 198, 205);
            color: #000;
        }
table{
    padding-left: 100px;
}
H2 {
    -webkit-text-stroke: 0.3px black;
    text-shadow:
    1px 1px #000,
    2px 2px #000;
    color: #fff;
}
.lok{
    float:left;
    width: 25%;
    background:rgb(112, 107, 117);
    height: 330px;
    justify-items: center;
    text-align: center;
    border-radius: 15px;
    box-shadow: 10px 10px 10px 2px rgba(7, 12, 16, 0.2) inset;
    border: 4px double black;
    }
    input{
    border-radius: 5px;
    width: 70%;
    height: 35px;
    }
.tabs { width: 100%; padding: 0px; margin: 0 auto;}
.tabs>input { display: none; }
.tabs>div {
    display: none;
    padding: 12px;
    border: 1px solid #C0C0C0;
    background-image: url("меню.png");
    background-size: cover;
    height:90%;
}
.tabs>label {
    display: inline-block;
    padding: 7px;
    margin: 0 -5px -1px 0;
    text-align: center;
    color: #666666;
    border: 1px solid #C0C0C0;
    background: #E0E0E0;
    cursor: pointer;
}
.tabs>input:checked + label {
    border: 1px solid #C0C0C0;
    border-bottom: 1px solid #FFFFFF;
    background: #FFFFFF;
}
#tab_1:checked ~ #txt_1,
#tab_2:checked ~ #txt_2,
#tab_3:checked ~ #txt_3,
#tab_4:checked ~ #txt_4,
#tab_5:checked ~ #txt_5,
#tab_6:checked ~ #txt_6 { display: block; }
</style>
</head>

<body link=#000>
<div class="tabs">
    <input   type="radio" name="inset" value="" id="tab_1" checked>
    <label for="tab_1">Запись к мастеру</label>

    <input type="radio" name="inset" value="" id="tab_2">
    <label for="tab_2">Услуги</label>

    <input type="radio" name="inset" value="" id="tab_3">
    <label for="tab_3">Товары</label>

    <input type="radio" name="inset" value="" id="tab_4">
    <label for="tab_4">Отчеты</label>

    <input type="radio" name="inset" value="" id="tab_5">
    <label for="tab_5">Агенты</label>

    <input type="radio" name="inset" value="" id="tab_6">
    <label for="tab_6">Мастера</label>

    <div id="txt_1">
        <div class="lok">
    <h2 class="txt" style="font-family:Cambria;">Запись на услугу</h2>
<form action="vendor/registr.php" method="post">
<input class="menu" type="text" name="fio" placeholder="ФИО">
<br>
<br>
<input class="menu" type="datetime-local" name="date" placeholder="Дата">
<br>
<br>
<select id="selectvalue" style="height: 10%;"class="menu" name="service" placeholder="Услуга">
<option>Стрижка</option>
<option>Окрашивание</option>
<option>Маникюр</option>
<option>Педикюр</option>
<option>Макияж</option>
<option>Укладка</option>
<option>Массаж</option>
</select>
<br>
<br>
<input class="menu" type="text" name="phone" placeholder="Номер телефона">
<br>
<br>
<input class="button2" style="width: 30%;" type="submit" value="Записать">
<br>
</div>
<br>
    <div>
        <table>
            <tr>
                <th>ФИО</th>
                <th>Услуга</th>
                <th>Дата записи</th>
                <th>Номер телефона</th>
</tr>
<?php
    $records = mysqli_query($link, "SELECT * FROM `records` ORDER BY `id` DESC");
    $records = mysqli_fetch_all($records);
    foreach ($records as $record) {
    ?>
<tr>
    <td><?= $record[1] ?></td>
    <td><?= $record[2] ?></td>
    <td><?= $record[3] ?></td>
    <td><?= $record[4] ?></td>
    <td><a href="update.php?id=<?=$record[0] ?>">Изменить</a></td>
    <td><a href="vendor/delete.php?id=<?=$record[0] ?>">Удалить</a></td>
</tr>
<?php
    }
    
?>


</table>
</div>
</div>
</form>
    <div id="txt_2">
    <table style="padding-left: 10px;">
            <tr>
                <th>Услуга</th>
                <th>Цена</th>
</tr>
<?php
    $services = mysqli_query($link, "SELECT * FROM `services` ORDER BY `id` DESC");
    $services = mysqli_fetch_all($services);
    foreach ($services as $service) {
    ?>
<tr>
    <td><?= $service[1] ?></td>
    <td><?= $service[2] ?></td>
    <td><a href="update_services.php?id=<?=$service[0] ?>">Изменить</a></td>
    <td><a href="vendor/delete_services.php?id=<?=$service[0] ?>">Удалить</a></td>
</tr>
<?php
    }
?>
</table>
    </div>
    <div id="txt_3">
    <table style="padding-left: 10px;">
            <tr>
                <th>Название</th>
                <th>Поставщик</th>
                <th>Цена</th>
</tr>
<?php
    $products = mysqli_query($link, "SELECT * FROM `products` ORDER BY `id` DESC");
    $products = mysqli_fetch_all($products);
    foreach ($products as $product) {
    ?>
<tr>
    <td><?= $product[1] ?></td>
    <td><?= $product[2] ?></td>
    <td><?= $product[3] ?></td>
    <td><a href="update_products.php?id=<?=$product[0] ?>">Изменить</a></td>
    <td><a href="vendor/delete_products.php?id=<?=$product[0] ?>">Удалить</a></td>
</tr>
<?php
    }
    
?>


</table>
    </div>
    <div id="txt_4">
    
<form action="otchet.php" method="POST">
<p><textarea style="border: 5px solid rgb(112, 107, 117); border-radius: 15px;" name="field1" cols="75" rows="15">

                    Отчет об оказанных услугах


Отчет об оказанных услугах №__ от __ 2023 г.
к акту об оказанных услугах №__ от __2022 г.

На основании Договора №__ от __ 2023 г.,
Организаций ООО «Шарм» были оказаны услуги за период с __ по __.

Всего оказано услуг на сумму: __ рублей, в том числе НДС 20% __.




  


   </textarea></p>
    <input style="width: 150px; margin: 0 210px;" type="submit" name="submit" value="Сохранить отчет">
</form>
<form action="2.php" method="POST">
   <input style="width: 180px; margin: 0 195px;" type="submit" name="submit" value="Посмотреть все отчеты">
</form>
    </div>
    <div id="txt_5">
    <table style="padding-left: 10px;">
            <tr>
                <th>Название</th>
                <th>Номер телефона</th>
                <th>Адрес</th>
</tr>
<?php
    $agents = mysqli_query($link, "SELECT * FROM `agents` ORDER BY `id` DESC");
    $agents = mysqli_fetch_all($agents);
    foreach ($agents as $agent) {
    ?>
<tr>
    <td><?= $agent[1] ?></td>
    <td><?= $agent[2] ?></td>
    <td><?= $agent[3] ?></td>
    <td><a href="update_agents.php?id=<?=$agent[0] ?>">Изменить</a></td>
    <td><a href="vendor/delete_agents.php?id=<?=$agent[0] ?>">Удалить</a></td>
</tr>
<?php
    }
?>
</table>
    </div>
    <div id="txt_6">
    <div class="lok" style="height:430px;">
    <h2 class="txt" style="font-family:Cambria;">Регистрация нового мастера</h2>
<form action="vendor/registr_employees.php" method="post">
<input class="menu" type="text" name="fio" placeholder="ФИО">
<br>
<br>
<input class="menu" type="text" name="login" placeholder="Логин">
<br>
<br>
<input class="menu" type="text" name="password" placeholder="Пароль">
<br>
<br>
<select id="selectvalue" style="height: 7%;"class="menu" name="role" placeholder="Роль">
<option>Парикмахер</option>
<option>Массажист</option>
<option>Мастер ногтевого сервиса</option>
<option>Косметолог</option>
<option>Визажист</option>
<option>Администратор</option>
</select>
<br>
<br>
<input class="menu" type="text" name="phone" placeholder="Номер телефона">
<br>
<br>
<input class="button3" style="width: 45%;" type="submit" value="Зарегистрировать">
<br>
</div>
<br>
    <div>

        <table>
            <tr>
                <th>ФИО</th>
                <th>Роль</th>
                <th>Номер телефона</th>
</tr>
<?php
    $employees = mysqli_query($link, "SELECT * FROM `employees` ORDER BY `id` DESC");
    $employees = mysqli_fetch_all($employees);
    foreach ($employees as $employee) {
    ?>
<tr>
    <td><?= $employee[1] ?></td>
    <td><?= $employee[4] ?></td>
    <td><?= $employee[5] ?></td>
    <td><a href="update_employees.php?id=<?=$employee[0] ?>">Изменить</a></td>
    <td><a href="vendor/delete_employees.php?id=<?=$employee[0] ?>">Удалить</a></td>
</tr>
<?php
    }
    
?>


</table>
</div>
</form>
</div>
    </div>
</div>
</body>
</html>