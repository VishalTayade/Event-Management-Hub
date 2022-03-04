<?php

session_start();
require './admin/inc/validate.php';
require './admin/inc/database.php';

$db = new Database();
$photo_id = $_REQUEST['photo_id'];

$rules_array = array(
    'studio_name' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'address' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'city' => array('type' => 'string', 'required' => FALSE, 'min' => 1, 'max' => 255, 'trim' => true),
    'contact_person' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'mobile' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'email' => array('type' => 'string', 'required' => FALSE, 'min' => 1, 'max' => 255, 'trim' => true)
);

$val = new validation();
$val->addSource($_REQUEST);
$val->AddRules($rules_array);
$val->run();

if (sizeof($val->errors) > 0) {
    print_r($val->errors);
} else {
    $data = $val->sanitized;


    $photo = $db->update("photographers", ['studio_name' => $data['studio_name'], 'address' => $data['address'], 'city' => $data['city'], 'contact_person' => $data['contact_person'], 'mobile' => $data['mobile'], 'email' => $data['email']], ['photo_id' => $photo_id]);


    $logo_name = $photo . "-" . $_FILES['logo_image']['name'];

    if (move_uploaded_file($_FILES['logo_image']['tmp_name'], "./logos/" . $logo_name)) {
        $img = $db->update("photographers", ['logo' => $logo_name], ['photo_id' => $photo_id]);
    }

    if ($photo >= 1) {
        echo "<script>alert('Record updated successfully!');window.location='photo-profile.php';</script>";
    } else {
        echo "<script>alert('Sorry! something went wrong...');window.location='photo-profile-update.php?photo_id=$photo_id';</script>";
    }
}
?>




