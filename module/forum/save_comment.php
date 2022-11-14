<?php
$data=array(
    'forum_id'=>$_GET['id'],
    'detail'=>$_POST['detail'],
    'owner_id'=>$_SESSION['user']['id'],
    'create_time'=>date('Y-m-d H:i:s'),
);
$sql='insert into forum_comment set '.arr2set($data);
$result=$db->query($sql);

if($result){
    echo "บันทึกความเห็นสำเร็จ โปรดรอสักครู่";
    echo redirect('?p=forum/read&id='.$_GET['id'],2);
}else{
    echo "ไม่สามารถบันทึกความเห็นได้";
    echo $sql;
    echo $db->error;
}