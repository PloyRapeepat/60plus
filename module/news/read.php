<?php
//บันทึกจำนวนผู้เยี่ยมชม
$sql='update news set visitor=visitor+1 where id='.$_GET['id'];
$result=$db->query($sql);

$sql='select * from news where id='.$_GET['id'];
$result=$db->query($sql);
$forum=$result->fetch_assoc();

//ดึงข้อมูลผู้ตั้งหัวข้อ
$sql='select * from user where id='.$forum['owner_id'];
$owner_data=$db->query($sql);
$owner=$owner_data->fetch_assoc();

echo "<h2>".$forum['subject']."</h2>";
echo "<p>".$forum['detail']."</p>";
echo "<p style='text-align:right'><i>โดย ".$owner['name']." ".$owner['surname']." @ ".$forum['time_create']."</i></p>";
echo "<hr>";
?>