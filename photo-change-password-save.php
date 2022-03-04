<?php

require './admin/inc/validate.php';
require './admin/inc/database.php';

$db = new Database();

$user_id = $_REQUEST['user_id'];
$current_password = $_REQUEST['old-password'];
$new_password = $_REQUEST['new-password'];
$confirm_password = $_REQUEST['retype-password'];

$user = $db->select("users", "*", ['user_id' => $user_id])[0];


if ($user['password'] != md5($current_password)) {
    echo "<script>alert('Please Enter Correct current password');window.location='hotel-change-password.php';</script>";
} elseif ($new_password != $confirm_password) {
    echo "<script>alert('Sorry new password and confirm password are not match please try again'); window.location='hotel-change-password.php'; </script>";
} else {
    $user_info = $db->select("users", "*", ['user_id' => $user_id])[0];

    $update = $db->update("users", ['password' => md5($new_password)], ['user_id' => $user_id]);


    if ($update >= 0) {

        echo '<script>alert("Your password change successfully");window.location="vender-logout.php";  </script>';
    } else {
        echo '<script>alert("Failed to change");window.location="photo-change-password.php";  </script>';
    }
}
?>