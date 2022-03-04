<?php

session_start();
require './admin/inc/validate.php';
require './admin/inc/database.php';

$db = new Database();
$caterer_id = $_REQUEST['caterer_id'];

$rules_array = array(
    'caterer_name' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'address' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'city' => array('type' => 'string', 'required' => FALSE, 'min' => 1, 'max' => 255, 'trim' => true),
    'contact_person' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'mobile' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'email' => array('type' => 'string', 'required' => FALSE, 'min' => 1, 'max' => 255, 'trim' => true),
    'rate' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'type' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true)
);

$val = new validation();
$val->addSource($_REQUEST);
$val->AddRules($rules_array);
$val->run();

if (sizeof($val->errors) > 0) {
    print_r($val->errors);
} else {
    $data = $val->sanitized;


    $caterer = $db->update("caterers", ['caterer_name' => $data['caterer_name'], 'address' => $data['address'], 'city' => $data['city'], 'contact_person' => $data['contact_person'], 'mobile' => $data['mobile'], 'email' => $data['email'], 'rate' => $data['rate'], 'type' => $data['type']], ['caterer_id' => $caterer_id]);


    $logo_name = $caterer . "-" . $_FILES['logo_image']['name'];

    if (move_uploaded_file($_FILES['logo_image']['tmp_name'], "./logos/" . $logo_name)) {
        $img = $db->update("caterers", ['logo' => $logo_name], ['caterer_id' => $caterer_id]);
    }

    if ($caterer >= 1) {
        echo "<script>alert('Record updated successfully!');window.location='caterer-profile.php';</script>";
    } else {
        echo "<script>alert('Sorry! something went wrong...');window.location='caterer-profile-update.php?caterer_id=$caterer_id';</script>";
    }
}
?>




