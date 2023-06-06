<?php
require_once("./db/db.php");
$agents_id=$_GET['id'];
$agents = mysqli_query($link,"SELECT * FROM `agents` WHERE `id` = '$agents_id'");
$agents = mysqli_fetch_assoc($agents);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение услуги</title>
</head>
<style>
    H2 {
    -webkit-text-stroke: 0.3px black;
    text-shadow:
    1px 1px #000,
    2px 2px #000;
    color: #fff;
}

    body{
    background-image: url("меню.png");
    }
    .forma{
    background:rgb(112, 107, 117);
    height: 325px;
    width: 270px;
    margin: 40px 0 0 50px;
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
    border: 4px double black;
    }
    select{
    border-radius: 5px;
    width: 75%;
    height: 40px;
    border: 4px double black;
    }
</style>
<div class="forma">
<body>
<h2 style="padding-top:7px;">Изменение услуги</h2>
<form  action="./vendor/update_agents.php" method="post">
<input type="hidden" name="id" value="<?=$agents['id']?>">
<input type="text" name="name" value="<?= $agents['name'] ?>">
<br>
<br>
<input type="text" name="phone" value="<?=$agents['phone']?>">
<br>
<br>
<input type="text" name="address" value="<?=$agents['address']?>">
<br>
<br>
<input style="width: 50%;" type="submit" value="Изменить">
<br>
</form>
</div>
</body>
</html>