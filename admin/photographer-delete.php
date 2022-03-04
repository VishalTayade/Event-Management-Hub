<?php

session_start();
require './inc/validate.php';
require './inc/database.php';

$db = new Database();
$photo_id = $_REQUEST['photo_id'];

$photo = $db->update("photographers", ['deleted' => 1], ['photo_id' => $photo_id]);


if ($photo <= 1) {
    echo "<script>alert('Record deleted successfully!');window.location='photographer-manage.php';</script>";
} else {
    echo "<script>alert('Sorry! something went wrong...');window.location='photographer-manage.php';</script>";
}
?>




