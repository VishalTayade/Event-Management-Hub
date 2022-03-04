<?php

session_start();
require './inc/validate.php';
require './inc/database.php';

$db = new Database();

$rules_array = array(
    'mehandi_class_name' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
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


    $mehandi = $db->insert("mehandi", ['mehandi_class_name' => $data['mehandi_class_name'], 'address' => $data['address'], 'city' => $data['city'], 'contact_person' => $data['contact_person'], 'mobile' => $data['mobile'], 'email' => $data['email'], 'rate' => $data['rate'], 'type' => $data['type']]);


    $logo_name = $mehandi . "-" . $_FILES['logo_image']['name'];

    if (move_uploaded_file($_FILES['logo_image']['tmp_name'], "./logos/" . $logo_name)) {
        $img = $db->update("mehandi", ['logo' => $logo_name], ['mehandi_id' => $mehandi]);
    }



    $user = $db->insert("users", ['mehandi_id' => $mehandi, 'name' => $data['mehandi_class_name'], 'mobile_no' => $data['mobile'], 'email' => $data['email'], 'username' => $data['mobile'], 'password' => md5($data['mehandi_class_name']), 'type' => "mehandi"]);

    if ($mehandi >= 1) {
        echo "<script>alert('Mehandi added successfully!');window.location='mehandi-manage.php';</script>";
    } else {
        echo "<script>alert('Sorry! something went wrong...');window.location='mehandi-add.php';</script>";
    }
}
?>






