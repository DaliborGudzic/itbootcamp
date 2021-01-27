<?php
session_start();
require_once '../db/db_connection.php'; 

$id = ($_POST['id'])?? '';

if($id !== ''){
    $t = $db->deletePhone($id);
}else{
    die("No id provided!");
}
// TODO
// Proveriti 
if(!$t)
    die("Unsuccessful delete!");
else
    header('Location: ../admin.php');

// if(!$t)
//     die("Unsuccessful delete!");
// else
//     header('Location: ../admin.php');
?>