<?php

session_start();

include './inc/database.php';
require './inc/validate.php';

$db = new Database();
$username = trim(filter_input(INPUT_POST, "username"));
$pass = filter_input(INPUT_POST, "password");

$user = $db->select("users", "*", ["AND" => ['username' => $username, 'password' => MD5($pass), "deleted" => 0]]);

if (sizeof($user) >= 1) {
    $_SESSION['admin'] = array("user_id" => $user[0]['user_id'], "type" => $user[0]['type']);

    header("location:index.php");
} else {
    echo '<script>alert("Username/Password is wrong. Please try again"); window.location="login.php"; </script>';
}
?>
