<?php

session_start();

include './admin/inc/database.php';
$db = new Database();

$username = $_REQUEST['mobile'];
$password = $_REQUEST['password'];
$type = $_REQUEST['type'];


$user = $db->select("users", "*", ["AND" => ['username' => $username, 'password' => MD5($password), 'type' => $type]]);

if (sizeof($user) >= 1) {
    $_SESSION['vendor'] = array("user_id" => $user[0]['user_id'], "type" => $user[0]['type']);

    header("location:index.php");
} else {
    echo '<script>alert("Username/Password is wrong. Please try again"); window.location="vender-login.php"; </script>';
}
?>

