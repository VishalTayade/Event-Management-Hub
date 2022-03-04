<?php

session_start();
require './inc/validate.php';
require './inc/database.php';

$db = new Database();
$card_id = $_REQUEST['card_id'];

$card = $db->update("cards", ['deleted' => 1], ['card_id' => $card_id]);

if ($card >= 1) {
    echo "<script>alert('Record deleted successfully!');window.location='card-manage.php';</script>";
} else {
    echo "<script>alert('Sorry! something went wrong...');window.location='card-manage.php';</script>";
}
?>




