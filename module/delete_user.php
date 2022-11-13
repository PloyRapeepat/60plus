<?php
$sql='delete from user where id="'.$_GET['id'].'"';
$result=$db->query($sql);

echo "ลบผู้ใช้สำเร็จ โปรดรอสักครู่";
echo "<meta http-equiv='refresh' content='2;?p=usermanage'>";