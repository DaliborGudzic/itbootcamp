<?php
session_start();
require_once '../db/db_connection.php'; 

$id = ($_GET['id'])?? '';
$brand = ($_GET['brand'])?? '';
$model = ($_GET['model'])?? '';
$dimensions = ($_GET['dimensions'])?? '';
$display = ($_GET['display'])?? '';
$front_camera = ($_GET['front_camera'])?? '';
$back_camera = ($_GET['back_camera'])?? '';
$chipset = ($_GET['chipset'])?? '';
$ram = ($_GET['ram'])?? '';
$battery = ($_GET['battery'])?? '';
$weight = ($_GET['weight'])?? '';
$memory = ($_GET['memory'])?? '';
$operating_system = ($_GET['operating_system'])?? '';
$pic = ($_GET['pic'])?? '';
$hires_pic = ($_GET['hires_pic'])?? '';
$price = ($_GET['price'])?? '';

$t = $db->sql_query("UPDATE phones SET brand='$brand',model='$model',dimensions='$dimensions',display='$display',front_camera='$front_camera',back_camera='$back_camera',chipset='$chipset',ram='$ram',battery='$battery',weight='$weight',memory='$memory',operating_system='$operating_system',pic='$pic',hires_pic='$hires_pic',price='$price' WHERE id='$id'");

// TODO
// Proveriti 
if(!$db->affectedRows())
    die("Unsuccessful!");
else
    header('Location: ../admin.php');

?>