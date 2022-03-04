<?php
include'./admin/inc/database.php';
include'./admin/inc/validate.php';

$db=new database();

$rules_array=array(
            'name'=>array('type'=>'string','required'=>TRUE,'min'=>1,'max'=>255,'trim'=>true),
            'email'=>array('type'=>'string','required'=>TRUE,'min'=>1,'max'=>255,'trim'=>true),
            'subject'=>array('type'=>'string','required'=>TRUE,'min'=>1,'max'=>255,'trim'=>true),
            'message'=>array('type'=>'string','required'=>TRUE,'min'=>1,'max'=>255,'trim'=>true)
);

$val=new validation();
$val->addSource($_REQUEST);
$val->AddRules($rules_array);
$val->run();

if (sizeof($val->errors) > 0) {
    print_r($val->errors);
} else {
    $data = $val->sanitized;
    
    $contact=$db->insert('contact',['name'=>$data['name'],'email'=>$data['email'],'subject'=>$data['subject'],'message'=>$data['message']]);
    
    if($contact>=1)
    {
        echo"<script>alert('thank u for contacting us! we will get back to u soon');window.location='contact.php';</script>";
    }
    else
    {
        echo"<script>alert('something went wrong');window.href='contact.php';</script>";
    }
        
    }

?>

