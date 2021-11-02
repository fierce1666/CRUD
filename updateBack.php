<?php

$connect=new mysqli('localhost', 'root','', 'crud' );

if (mysqli_connect_errno()) {
    die("Error connect to database!");
}


$id = $connect -> real_escape_string ($_POST ['id_persons']);
$position = $connect -> real_escape_string ($_POST ['position']);
$surname = $connect -> real_escape_string ($_POST['surname']);
$name = $connect -> real_escape_string ($_POST['name']);
$patronomic = $connect -> real_escape_string ($_POST['patronomic']);
$date_of_birth = $connect -> real_escape_string ($_POST['date_of_birth']);
$experience = $connect -> real_escape_string ($_POST['experience']);

?>
<form action ="/updateFront.php" method="post">
    <p>Должность</p>
    <input type ="text" name="position" value="<?=$persons['position']?>">
    <p>Фамилия</p>
    <input type ="text" name="surname" value="<?=$persons['surname']?>">
    <p>Имя</p>
    <input type ="text" name="name" value="<?=$persons['name']?>">
    <p>Отчество</p>
    <input type ="text" name="patronomic" value="<?=$persons['patronomic']?>">
    <p>Дата рождения</p>
    <input type ="number" name="date_of_birth" value="<?=$persons['date_of_birth']?>">
    <p>Стаж</p>
    <input type ="number" name="experience" value="<?=$persons['experience']?>">  <br> <br>
    <button type = "submit"> Вести изменения </button>
</form>

mysqli_query($connect, query : UPDATE `persons` SET `id_persons`=`'[value-1]',`position`='[value-2]',`surname`='[value-3]',`name`='[value-4]',`patronomic`='[value-5]',`date_of_birth`='[value-6]',`experience`='[value-7]')

header('Location: /');
?>
