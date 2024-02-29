<?php

$host = 'sql11.freesqldatabase.com';
$username = 'sql11687687';
$password = 'YbLBsHMrnq';
$database = 'sql11687687';
$port = '3306';

$conn = new mysqli($host, $username, $password, $database, $port);


if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

$username = $_POST['login'];
$password = $_POST['password'];


$query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Пользователь найден, делайте дальнейшие действия, например, переадресуйте его на другую страницу
    echo "<script>valid();</script>";
} else {
    // Пользователь не найден, можно вывести сообщение об ошибке или что-то еще
    echo "<script>invalid();</script>";
}

$conn->close();
?>