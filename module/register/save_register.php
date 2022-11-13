<?php
if(empty($_POST['password'])||$_POST['password']!=$_POST['pass']){
    echo 'ยืนยันรหัสผ่านไม่ถูกต้อง';
    echo '<button class="btn btn-warning" onclick="history.back()">กลับ</button>';
}else{
    $data=array(
        'username'=>$_POST['username'],
        'password'=>md5($_POST['password']),
        'email'=>$_POST['email'],
        'name'=>$_POST['name'],
        'surname'=>$_POST['surname'],
        'dob'=>$_POST['dob'],
    );
    $sql='insert into user set '.arr2set($data);
    $result=$db->query($sql);
    if($result){
        echo "การสมัครสมาชิกเสร็จสมบูรณ์ โปรดรอสักครู่";
        echo redirect('?p=login/form',2);
    }else{
        echo "การสมัครสมาชิกไม่สำเร็จ";
        echo $db->error;
        echo $sql;

    }
}