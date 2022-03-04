<?php

session_start();
require './inc/validate.php';
require './inc/database.php';

$db = new Database();
$event_id = $_REQUEST['event_id'];

$rules_array = array(
    'company_name' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 255, 'trim' => true),
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

    $event = $db->update("event_planners", ['company_name' => $data['company_name'], 'address' => $data['address'], 'city' => $data['city'], 'contact_person' => $data['contact_person'], 'mobile' => $data['mobile'], 'email' => $data['email']], ['event_id' => $event_id]);

    $logo_name = $event . "-" . $_FILES['logo_image']['name'];

    if (move_uploaded_file($_FILES['logo_image']['tmp_name'], "./logos/" . $logo_name)) {
        $img = $db->update("event_planners", ['logo' => $logo_name], ['event_id' => $event_id]);
    }

    if ($event >= 1) {
        echo "<script>alert('Record updated successfully!');window.location='event-planner-manage.php';</script>";
    } else {
        echo "<script>alert('Sorry! something went wrong...');window.location='event-planner-update.php?event_id=$event_id';</script>";
    }
}
?>




