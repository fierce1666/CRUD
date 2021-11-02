<?php

require_once 'connect.php';

$id_persons = $_GET['id'];

mysqli_query($connect, "DELETE FROM `persons` WHERE `persons`.`id_persons` = $id_persons ");

header('Location: /');

?>
