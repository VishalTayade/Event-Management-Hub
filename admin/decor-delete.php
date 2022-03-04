<?php

session_start();
require './inc/validate.php';
require './inc/database.php';

$db = new Database();
$decor_id = $_REQUEST['decor_id'];


$decor = $db->update("decorations", ['deleted' => 1], ['decor_id' => $decor_id]);

if ($decor >= 1) {
    echo "<script>alert('Record deleted successfully!');window.location='decor-manage.php';</script>";
} else {
    echo "<script>alert('Sorry! something went wrong...');window.location='decor-manage.php';</script>";
}
?>





