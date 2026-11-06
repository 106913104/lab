<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$token = $_POST['token'];

if ($username == 'Duong' && $password == '106913104') {
    $_SESSION['user'] = $username;
    $_SESSION['token'] = $token; 
    header('Location: welcome.php');
} else {
    echo "invalid login. <a href='login.php'>Try again</a>";
}
?>