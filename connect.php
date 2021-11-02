<?php
$connect=new mysqli('localhost', 'root','', 'crud' );

if (mysqli_connect_errno()) {
    die("Error connect to database!");
}
?>
