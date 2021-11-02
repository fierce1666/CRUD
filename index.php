<?php
//Read
require_once 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Persons</title>
</head>
<style>
    th, td {
        padding: 10px
    }

    th {
        background: #606060;
        color: #ffffff;
    }
    td {
        background: #b5b5b5;
    }
</style>
<body>
<table>
   <tr>
        <th>id_persons</th>
        <th>position</th>
        <th>surname</th>
        <th>name</th>
        <th>patronomic</th>
        <th>date_of_birth</th>
        <th>experience</th>
    </tr>
    <?php

        $persons = mysqli_query($connect, "SELECT * FROM `persons`");
        $persons = mysqli_fetch_all($persons);
        print_r($persons);
        foreach($persons as $persons) {
            ?>
            <tr>
                <td> <?=$persons[0] ?> </td>
                <td> <?=$persons[1] ?> </td>
                <td> <?=$persons[2] ?> </td>
                <td> <?=$persons[3] ?> </td>
                <td> <?=$persons[4] ?> </td>
                <td> <?=$persons[5] ?> </td>
                <td> <?=$persons[6] ?> </td>
                <td><a href="updateFront.php?id=<?=$persons[0] ?>">Изменение</a> </td>
                <td><a style="color: yellow;" href="delete.php?id=<?= $persons[0] ?>">Удаление</a></td>
            </tr> 
            <?php
            }
        ?>
    
    </table>

        <h1>Добавление</h1>

    <form action ="/create.php" method="post">
        <p>Должность</p>
        <input type ="text" name="position">
        <p>Фамилия</p>
        <input type ="text" name="surname">
        <p>Имя</p>
        <input type ="text" name="name">
        <p>Отчество</p>
        <input type ="text" name="patronomic">
        <p>Дата рождения</p>
        <input type ="number" name="date_of_birth">
        <p>Стаж</p>
        <input type ="number" name="experience"> <br> <br>
        <button type = "submit"> Добавить нового человека </button>
    </form>
</body>
</html>
