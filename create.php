<?php
//C-Create

$connect=new mysqli('localhost', 'root','', 'crud' );

if (mysqli_connect_errno()) {
    die("Error connect to database!");
}

$position = $connect -> real_escape_string ($_POST ['position']);
$surname = $connect -> real_escape_string ($_POST['surname']);
$name = $connect -> real_escape_string ($_POST['name']);
$patronomic = $connect -> real_escape_string ($_POST['patronomic']);
$date_of_birth = $connect -> real_escape_string ($_POST['date_of_birth']);
$experience = $connect -> real_escape_string ($_POST['experience']);


$sql = "INSERT INTO persons (`position`, `surname`, `name`, `patronomic`, `date_of_birth`, `experience`)VALUES('$position','$surname','$name','$patronomic','$date_of_birth ', '$experience')";


if($connect->query($sql)) {
    echo "Данные добавлены";
}
else {
    echo "Ошибка";

}
$connect -> close();

header('Location: /');

?>
