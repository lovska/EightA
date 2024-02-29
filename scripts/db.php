<?php

$servername = "sql11.freesqldatabase.com";
$username = "sql11687687";
$password = "YbLBsHMrnq";
$dbname = "sql11687687";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    die("Connection Failed". mysqli_connect_error());
} else {
    echo "<script>console.log('База данных успешно подключена');</script>";
}

?>