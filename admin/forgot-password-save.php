<?php

include './inc/database.php';
include './inc/validate.php';

$email = $_POST['email'];
$password = $_POST['password'];
$confirm_pass = $_POST['password1'];


$db = new Database();
if ($password != $confirm_pass) {
    echo "<script>alert('Password and Confirm Password Not Same');window.location='forgot-password.php'</script>";
} else {
    $forgot_password = $db->update("users", ['password' => md5($password)], ["email" => $email]);


    if ($forgot_password >= 1) {
        echo "<script>alert('New Password Set Successfully');window.location='login.php'</script>";
    } else {
        echo "<script>alert('Oppsss Something went Wrong.!!!');window.location='forgot-password-save'</script>";
    }
}
?>



