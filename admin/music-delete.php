<?php

session_start();
require './inc/validate.php';
require './inc/database.php';

$db = new Database();
$music_id = $_REQUEST['music_id'];

$caterer = $db->update("music", ['deleted' => 1], ['music_id' => $music_id]);


if ($caterer >= 1) {
    echo "<script>alert('Record deleted successfully!');window.location='music-manage.php';</script>";
} else {
    echo "<script>alert('Sorry! something went wrong...');window.location='music-manage.php';</script>";
}
?>




