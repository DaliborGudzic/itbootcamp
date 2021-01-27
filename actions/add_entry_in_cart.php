<?php
session_start();
require_once '../shoppingCart.php'; 

$id = ($_GET['id'])?? '';

// TODO
// Proveriti 
$cart->add_quantity($id, 1);

header('Location: ../shoppingCart_listItems.php');
?>