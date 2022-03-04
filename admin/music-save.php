<?php
include'./inc/database.php';
include'./inc/validate.php';

$db=new database();

$rules_array = array(
        'music_name'=> array('type'=>'string','required'=>TRUE,'min'=>1,'max'=>255,'trim'=>true),
        'address' => array('type'=>'string','required'=>TRUE,'min'=>1,'max'=>255,'trim'=>true),
        'city' => array('type'=>'string','required'=>FALSE,'min'=>1,'max'=>255,'trim'=>true),
        'contact_person' => array('type'=>'string','required'=>TRUE,'min'=>1,'max'=>255,'trim'=>true),
        'mobile' => array('type'=>'string','required'=>TRUE,'min'=>1,'max'=>255,'trim'=>true),
        'email' => array('type'=>'string','required'=>FALSE,'min'=>1,'max'=>255,'trim'=>true),
        'type' => array('type'=>'string','required'=>TRUE,'min'=>1,'max'=>255,'trim'=>true),
        'rate' => array('type'=>'string','required'=>TRUE,'min'=>1,'max'=>255,'trim'=>true)
       );

$val=new validation();
$val->addSource($_REQUEST);
$val->AddRules($rules_array);
$val->run();

if(sizeof($val->errors)>0)
{
    print_r($val->errors);
}
else
{
    $data=$val->sanitized;
    
    $music=$db->insert('music',['music_name'=>$data['music_name'],'address'=>$data['address'],'city'=>$data['city'],'contact_person'=>$data['contact_person'],'contact'=>$data['mobile'],'email'=>$data['email'],'music_type'=>$data['type'],'rate'=>$data['rate']]);
    
    $photo= $music."-".$_FILES['logo_image']['name'];
    
    if(move_uploaded_file($_FILES['logo_image']['tmp_name'],"./logos/".$photo))
    {
        $img=$db->update('music',['photo'=>$photo],['music_id'=>$music]);
    }
    
    $user = $db->insert("users", ['music_id' => $music, 'name' => $data['music_name'], 'mobile_no' => $data['mobile'], 'email' => $data['email'], 'username' => $data['mobile'], 'password' => md5($data['music_name']), 'type' => "music"]);

    if ($music >= 1) {
        echo "<script>alert('music added successfully!');window.location='music-manage.php'</script>";
    } else {
        echo "<script>alert('Sorry! something went wrong...');window.location='music-add.php'</script>";
    }
}
?>
