<?php
session_start();

if(isset($_COOKIE['user_id'])){
    setcookie('user_id', '', time()-(60*60*24));
    setcookie('username', '', time()-(60*60*24));
}
unset($_SESSION['user_id']);
unset($_SESSION['username']);

header('Location: index.php');

?>