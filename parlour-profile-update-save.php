<?php

session_start();
require './admin/inc/validate.php';
require './admin/inc/database.php';

$db = new Database();
$parlour_id = $_REQUEST['parlour_id'];

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


    $parlour = $db->update("parlours", ['parlour_name' => $data['parlour_name'], 'address' => $data['address'], 'city' => $data['city'], 'contact_person' => $data['contact_person'], 'mobile' => $data['mobile'], 'email' => $data['email'], 'rate' => $data['rate'], 'for' => $data['for']], ['parlour_id' => $parlour_id]);


    $logo_name = $parlour . "-" . $_FILES['logo_image']['name'];

    if (move_uploaded_file($_FILES['logo_image']['tmp_name'], "./logos/" . $logo_name)) {
        $img = $db->update("parlours", ['logo' => $logo_name], ['parlour_id' => $parlour_id]);
    }

    if ($parlour >= 1) {
        echo "<script>alert('Record Updated successfully!');window.location='parlour-profile.php';</script>";
    } else {
        echo "<script>alert('Sorry! something went wrong...');window.location='parlour-profile-update.php?parlour_id=$parlour_id';</script>";
    }
}
?>




