<?php
    require_once 'connect.php';
    
    
    $id_persons=$_GET['id'];
    $persons = mysqli_query($connect, "SELECT * FROM `persons` WHERE `id` = '$id_persons'");
    $persons = mysqli_fetch_assoc($persons);
    print_r($persons);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Изменение</title>
</head>
<body>
<h1>Изменение</h1>

<form action ="/create.php" method="post">
    <input type="hidden" name="id_persons" value="<?=$persons['id'] ?>">
    <p>Должность</p> 
    <input type ="text" name="position" value="<?=$persons['Должность']?>">
    <p>Фамилия</p>
    <input type ="text" name="surname" value="<?=$persons['Фамилия']?>">
    <p>Имя</p>
    <input type ="text" name="name" value="<?=$persons['Имя']?>">
    <p>Отчество</p>
    <input type ="text" name="patronomic" value="<?=$persons['Отчество']?>">
    <p>Дата рождения</p>
    <input type ="number" name="date_of_birth" value="<?=$persons['Дата рождения']?>">
    <p>Стаж</p>
    <input type ="number" name="experience" value="<?=$persons['Стаж']?>">  <br> <br>
    <button type = "submit"> Вести изменения </button>
</form>
</body>
</html>
