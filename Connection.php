<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "MilkShake";


$link = mysqli_connect($servername, $username, $password, $dbname);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}



$conn->close();


 if(mysqli_connect_errno() )
 {
     die ('Ошибка в подключении к БД ('.mysqli_connect_errno().') : '.mysqli_connect_error());           // выводит ошибку если она есть
     exit();     // завершаем работу приложения, останавливает работу php скриптов
 }
