<?php

session_start();
require './inc/validate.php';
require './inc/database.php';

$db = new Database();

$rules_array = array(
    'parlour_name' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'address' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'city' => array('type' => 'string', 'required' => FALSE, 'min' => 1, 'max' => 255, 'trim' => true),
    'contact_person' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'mobile' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'email' => array('type' => 'string', 'required' => FALSE, 'min' => 1, 'max' => 255, 'trim' => true),
    'rate' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'for' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true)
);

$val = new validation();
$val->addSource($_REQUEST);
$val->AddRules($rules_array);
$val->run();

if (sizeof($val->errors) > 0) {
    print_r($val->errors);
} else {
    $data = $val->sanitized;


    $parlour = $db->insert("parlours", ['parlour_name' => $data['parlour_name'], 'address' => $data['address'], 'city' => $data['city'], 'contact_person' => $data['contact_person'], 'mobile' => $data['mobile'], 'email' => $data['email'], 'rate' => $data['rate'], 'for' => $data['for']]);


    $logo_name = $parlour . "-" . $_FILES['logo_image']['name'];

    if (move_uploaded_file($_FILES['logo_image']['tmp_name'], "./logos/" . $logo_name)) {
        $img = $db->update("parlours", ['logo' => $logo_name], ['parlour_id' => $parlour]);
    }



    $user = $db->insert("users", ['parlour_id' => $parlour, 'name' => $data['parlour_name'], 'mobile_no' => $data['mobile'], 'email' => $data['email'], 'username' => $data['mobile'], 'password' => md5($data['parlour_name']), 'type' => "parlour"]);

    if ($parlour >= 1) {
        echo "<script>alert('Beauty Parlour added successfully!');window.location='parlour-manage.php';</script>";
    } else {
        echo "<script>alert('Sorry! something went wrong...');window.location='parlour-add.php';</script>";
    }
}
?>




