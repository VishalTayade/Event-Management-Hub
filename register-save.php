<?php
include'./admin/inc/database.php';
include'./admin/inc/validate.php';

$db=new database();

$rules_array=array(
            'name'=>array('type'=>'string','required'=>TRUE,'min'=>1,'max'=>255,'trim'=>true),
            'email'=>array('type'=>'string','required'=>TRUE,'min'=>1,'max'=>255,'trim'=>true),
            'username'=>array('type'=>'string','required'=>TRUE,'min'=>1,'max'=>255,'trim'=>true),
            'password'=>array('type'=>'string','required'=>TRUE,'min'=>1,'max'=>255,'trim'=>true),
            'contact'=>array('type'=>'string','required'=>TRUE,'min'=>1,'max'=>255,'trim'=>true)
);

$val=new validation();
$val->addSource($_REQUEST);
$val->AddRules($rules_array);
$val->run();

if (sizeof($val->errors) > 0) {
    print_r($val->errors);
} else {
    $data = $val->sanitized;
    
    $register=$db->insert('website_users',['name'=>$data['name'],'email'=>$data['email'],'username'=>$data['username'],'password'=>md5($data['password']),'contact'=>$data['contact']]);
    
    if($register>=1)
    {
        echo"<script>alert('Thank u for registering');window.location='index.php';</script>";
    }
    else
    {
        echo"<script>alert('something went wrong');window.href='index.php';</script>";
    }
        
    }

?>

