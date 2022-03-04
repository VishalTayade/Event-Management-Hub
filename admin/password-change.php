<?php
/* Create password and send password */
include './sms_send.php';
include './inc/database.php';

$db=new Database();
$id=$_REQUEST['id'];
$dist=$db->select("distributors","*",['dist_id'=>$id])[0];

$string = '1234567891011121214151617181920';
$string_shuffled = str_shuffle($string);
$code = substr($string_shuffled, 1, 5);
$update=$db->update("distributors",["password"=>  md5($code)],['dist_id'=>$id]);
$employees_msg = urlencode("Hello " . $dist['name'] . ", Your Password of Chala Jinkuya is changed. Your new Password is $code . Thank You");

sendVerificationSMS($employees_msg, $dist['mobile']);
?>
<script>
    alert('Password reset successfully');
    window.history.back();
</script>
