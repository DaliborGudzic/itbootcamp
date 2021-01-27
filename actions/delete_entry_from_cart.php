<?php
session_start();
require_once '../shoppingCart.php'; 

$id = ($_GET['id'])?? '';

// TODO
// Proveriti 
$cart->delete_product($id);

header('Location: ../shoppingCart_listItems.php');

?>