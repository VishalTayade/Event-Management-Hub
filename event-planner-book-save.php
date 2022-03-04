<?php

include 'admin/inc/database.php';
$db = new Database();
$register_id = $_REQUEST['register_id'];
$event_id = $_REQUEST['event_id'];
$venue = $_REQUEST['venue'];
$date = date("Y-m-d", strtotime($_REQUEST['date']));

$book = $db->insert("book", ["register_id" => $register_id, "event_id" => $event_id, "venue" => $venue, "date" => $date]);

if ($book == true) {
    echo "<script>alert('Booking done Successfully'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Oops! Something Went Wrong!'); window.location='index.php';</script>";
}
?>
