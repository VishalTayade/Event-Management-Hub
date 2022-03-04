<?php

session_start();
require './inc/validate.php';
require './inc/database.php';

$db = new Database();
$cake_id = $_REQUEST['cake_id'];

$cake = $db->update("cakes", ['deleted' => 1], ['cake_id' => $cake_id]);

if ($cake >= 1) {
    echo "<script>alert('Record deleted successfully!');window.location='cake-manage.php';</script>";
} else {
    echo "<script>alert('Sorry! something went wrong...');window.location='cake-manage.php';</script>";
}
?>