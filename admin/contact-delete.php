<?php

session_start();
require './inc/validate.php';
require './inc/database.php';

$db = new Database();
$id = $_REQUEST['id'];

$contact = $db->update("contact", ['deleted' => 1], ['id' => $id]);

if ($contact >= 1) {
    echo "<script>alert('Contact deleted successfully!');window.location='contact.php';</script>";
} else {
    echo "<script>alert('Sorry! something went wrong...');window.location='contact.php';</script>";
}
?>