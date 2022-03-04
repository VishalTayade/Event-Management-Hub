<?php

session_start();
require './inc/validate.php';
require './inc/database.php';

$db = new Database();
$parlour_id = $_REQUEST['parlour_id'];


$parlour = $db->update("parlours", ['deleted' => 1], ['parlour_id' => $parlour_id]);


if ($parlour >= 1) {
    echo "<script>alert('Record Deleted successfully!');window.location='parlour-manage.php';</script>";
} else {
    echo "<script>alert('Sorry! something went wrong...');window.location='parlour-manage.php';</script>";
}
?>




