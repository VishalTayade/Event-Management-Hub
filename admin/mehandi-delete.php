<?php

session_start();
require './inc/validate.php';
require './inc/database.php';

$db = new Database();
$mehandi_id = $_REQUEST['mehandi_id'];

$mehandi = $db->update("mehandi", ['deleted' => 1], ['mehandi_id' => $mehandi_id]);

if ($mehandi >= 1) {
    echo "<script>alert('Record deleted successfully!');window.location='mehandi-manage.php';</script>";
} else {
    echo "<script>alert('Sorry! something went wrong...');window.location='mehandi-manage.php';</script>";
}
?>