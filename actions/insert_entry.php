<?php
session_start();
require_once '../db/db_connection.php'; 

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

$t = $db->sql_query("INSERT INTO phones(id, group_id, brand, model, dimensions, display, front_camera, back_camera, chipset, ram, battery, weight, memory, operating_system, pic, hires_pic, price) VALUES (null, 1, '$brand', '$model', '$dimensions', '$display', '$front_camera', '$back_camera', '$chipset', '$ram', '$battery', '$weight', '$memory', '$operating_system', '$pic', '$hires_pic', '$price')");

// TODO
// Proveriti affected_rows vs $t
if(!$db->affectedRows())
    die("Unsuccessful insert!");
else
    header('Location: ../admin.php');
?>