<?php

$data=array(
    'sender_id'=>$_SESSION['user']['id'],
    'receiver_id'=>$_GET['r_id'],
    'message'=>$_POST['message'],
);

$sql='insert into chat set '.arr2set($data);
$result=$db->query($sql);

if($result){
    echo redirect('?p=chat/view&r_id='.$_GET['r_id']);
}else{
    echo "ไม่สามารถดำเนินการได้";
    echo $sql;
    echo $db->error;
}