<?php
$host = 'localhost'; 
$db = 'PR2';
$user = 'root'; 
$pass = 'Und_ofg'

// Подключение к базе данных
$conn = new mysqli($host, $user, $pass, $db);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
?>