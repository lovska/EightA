<?php
require_once('scripts/db.php');

$login = $_POST['login'];
$pass = $_POST['password'];

if(empty($login) || empty($pass))
{
    echo "<script src='scripts/script.js'>consolt.log('444')</script>";
} else {
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        echo '<script src="scripts/script.js">console.log("123");</script>';
    } else {
        header('Location: admin.html?valid=false');
        echo "<script>invalid();</script>";
    }
}

?>