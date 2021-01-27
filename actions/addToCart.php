<?php
session_start();
require_once '../shoppingCart.php';

$id = ($_GET['id'])?? '';
$model = ($_GET['model'])?? '';
$price = ($_GET['price'])?? '';

if($id === '' && $model === '' && $price === '')
    die("Error in getting the info on phone (add to cart button)");

// TODO
// Neka provera
$t = $cart->add_to_cart($id, $model, $price, 1);

header('Location: ../index.php');


?>