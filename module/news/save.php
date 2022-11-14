<?php
$data=array(
    'subject'=>$_POST['subject'],
    'detail'=>$_POST['detail'],
    'owner_id'=>$_SESSION['user']['id'],
    'time_create'=>date('Y-m-d H:i:s'),
);
$sql='insert into news set '.arr2set($data);
$result=$db->query($sql);

if($result){
    echo "บันทึกข้อมูลสำเร็จ โปรดรอสักครู่";
    echo redirect('?p=news/view',2);
}else{
    echo "ไม่สามารถบันทึกข้อมูลได้";
    echo $sql;
    echo $db->error;
}