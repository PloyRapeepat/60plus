<?php

$data=array(
    'username'=>$_POST['username'],
    'password'=>md5($_POST['password']),
    'name'=>$_POST['name'],
    'surname'=>$_POST['surname'],
    'email'=>$_POST['email'],
    'dob'=>$_POST['dob'],
    'user_type'=>$_POST['user_type'],
);

$sql='insert into user set '.arr2set($data);
$result=$db->query($sql);

if($result){
    echo "เพื่มผู้ใช้สำเร็จ โปรดรอสักครู่";
    echo redirect('?p=admin/usermanage',2);
}else{
    echo "ผิดพลาดไม่สามารถดำเนินการได้";
    echo $sql;
    echo $db->error;
}