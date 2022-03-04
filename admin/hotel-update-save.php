<?php

session_start();
require './inc/validate.php';
require './inc/database.php';

$db = new Database();
$hotel_id = $_REQUEST['hotel_id'];

$rules_array = array(
    'hotel_name' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'address' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'city' => array('type' => 'string', 'required' => FALSE, 'min' => 1, 'max' => 255, 'trim' => true),
    'contact_person' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'mobile' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'email' => array('type' => 'string', 'required' => FALSE, 'min' => 1, 'max' => 255, 'trim' => true),
    'rate' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
    'capacity' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true)
);

$val = new validation();
$val->addSource($_REQUEST);
$val->AddRules($rules_array);
$val->run();

if (sizeof($val->errors) > 0) {
    print_r($val->errors);
} else {
    $data = $val->sanitized;


    $hotel = $db->update("hotels", ['hotel_name' => $data['hotel_name'], 'address' => $data['address'], 'city' => $data['city'], 'contact_person' => $data['contact_person'], 'mobile' => $data['mobile'], 'email' => $data['email'], 'rate' => $data['rate'], 'capacity' => $data['capacity']], ['hotel_id' => $hotel_id]);


    $logo_name = $hotel . "-" . $_FILES['logo_image']['name'];

    if (move_uploaded_file($_FILES['logo_image']['tmp_name'], "./logos/" . $logo_name)) {
        $img = $db->update("hotels", ['logo' => $logo_name], ['hotel_id' => $hotel_id]);
    }

    if ($hotel <= 1) {
        echo "<script>alert('Record Updated Successfully!');window.location='hotel-manage.php';</script>";
    } else {
        echo "<script>alert('Sorry! something went wrong...');window.location='hotel-update.php?hotel_id=$hotel_id';</script>";
    }
}
?>




