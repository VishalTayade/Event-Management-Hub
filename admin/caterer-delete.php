<?php

session_start();
require './inc/validate.php';
require './inc/database.php';

$db = new Database();
$caterer_id = $_REQUEST['caterer_id'];

$caterer = $db->update("caterers", ['deleted' => 1], ['caterer_id' => $caterer_id]);


if ($caterer >= 1) {
    echo "<script>alert('Record deleted successfully!');window.location='caterer-manage.php';</script>";
} else {
    echo "<script>alert('Sorry! something went wrong...');window.location='caterer-manage.php';</script>";
}
?>




