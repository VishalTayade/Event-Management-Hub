<?php

session_start();
require './inc/validate.php';
require './inc/database.php';

$db = new Database();
$event_id = $_REQUEST['event_id'];

$event = $db->update("event_planners", ['deleted' => 1], ['event_id' => $event_id]);

if ($event >= 1) {
    echo "<script>alert('Record deleted successfully!');window.location='event-planner-manage.php';</script>";
} else {
    echo "<script>alert('Sorry! something went wrong...');window.location='event-planner-manage.php';</script>";
}
?>





