<?php

if(empty($_POST['username'])||empty($_POST['password'])){
    echo "โปรดระบุช้อมูลผู้ใช้";
}else{
    $sql='select * from user where username="'.$_POST['username'].'" AND password="'.md5($_POST['password']).'"';
    echo $sql;
    $result=$db->query($sql);
    if($result->num_rows<=0){
        echo "ข้อมูลชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }else{
        $_SESSION['user']=$result->fetch_assoc();
        echo "<meta http-equiv='refresh' content='0;?p=home_user'>";
    }
}