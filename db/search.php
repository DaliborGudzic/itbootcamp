<?php
//Including Database configuration file.
include_once "db_connection.php";

if (isset($_GET['search'])) {
   $search = $_GET['search'];
   echo json_encode($db->livesearch($search));
}
?>