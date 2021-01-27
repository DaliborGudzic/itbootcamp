<?php
session_start();

// if(count($_COOKIE) >0)
if(isset($_COOKIE['user_id'])){
    setcookie('user_id', '', time()-(60*60*24));
    setcookie('username', '', time()-(60*60*24));
}
unset($_SESSION['user_id']);
unset($_SESSION['username']);

header('Location: index.php');
// echo "Successful logout! Return to <a href='index.php'> MAIN PAGE</a>";

?>