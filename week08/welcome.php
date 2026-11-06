<?php
session_start();
if (isset($_SESSION['user'])) {
    include 'header.inc';
    
    echo "Welcome, " . $_SESSION['user'] . "<br>" .
        "Your token: " . $_SESSION['token'];

    include 'footer.inc';
} else {
    header('Location: login.php');
}