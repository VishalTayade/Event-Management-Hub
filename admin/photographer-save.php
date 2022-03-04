<?php

session_start();
require './inc/validate.php';
require './inc/database.php';

$db = new Database();

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


    $photo = $db->insert("photographers", ['studio_name' => $data['studio_name'], 'address' => $data['address'], 'city' => $data['city'], 'contact_person' => $data['contact_person'], 'mobile' => $data['mobile'], 'email' => $data['email']]);


    $logo_name = $photo . "-" . $_FILES['logo_image']['name'];

    if (move_uploaded_file($_FILES['logo_image']['tmp_name'], "./logos/" . $logo_name)) {
        $img = $db->update("photographers", ['logo' => $logo_name], ['photo_id' => $photo]);
    }



    $user = $db->insert("users", ['photo_id' => $photo, 'name' => $data['studio_name'], 'mobile_no' => $data['mobile'], 'email' => $data['email'], 'username' => $data['mobile'], 'password' => md5($data['studio_name']), 'type' => "photo"]);

    if ($photo >= 1) {
        echo "<script>alert('Photographer added successfully!');window.location='photographer-manage.php';</script>";
    } else {
        echo "<script>alert('Sorry! something went wrong...');window.location='photographer-add.php';</script>";
    }
}
?>




