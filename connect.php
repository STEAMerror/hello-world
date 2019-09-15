<?php
$host = '127.0.0.1'; //адрес сервера 
$database = 'zadanie'; //имя базы данных
$user = 'root'; //имя пользователя
$password = ''; //пароль

$con = mysqli_connect($host, $user, $password, $database) //получаем ссылку подключения
or die("Ошибка: " . mysqli_error($con));
?>