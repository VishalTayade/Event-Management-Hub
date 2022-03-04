<?php

session_start();
require './inc/validate.php';
require './inc/database.php';

$db = new Database();
$hotel_id = $_REQUEST['hotel_id'];

$hotel = $db->update("hotels", ['deleted' => 1], ['hotel_id' => $hotel_id]);

if ($hotel <= 1) {
    echo "<script>alert('Record Deleted Successfully!');window.location='hotel-manage.php';</script>";
} else {
    echo "<script>alert('Sorry! something went wrong...');window.location='hotel-manage.php';</script>";
}
?>





