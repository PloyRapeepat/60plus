<?php
//บันทึกจำนวนผู้เยี่ยมชม
$sql='update forum set visitor=visitor+1 where id='.$_GET['id'];
$result=$db->query($sql);

$sql='select * from forum where id='.$_GET['id'];
$result=$db->query($sql);
$forum=$result->fetch_assoc();

//ดึงข้อมูลผู้ตั้งหัวข้อ
$sql='select * from user where id='.$forum['owner_id'];
$owner_data=$db->query($sql);
$owner=$owner_data->fetch_assoc();

echo "<h2>".$forum['subject']."</h2>";
echo "<p>".$forum['detail']."</p>";
echo "<p style='text-align:right'><i>โดย ".$owner['name']." ".$owner['surname']." @ ".$forum['create_time']."</i></p>";
echo "<hr>";

//แสดงความเห็นทั้งหมด
$sql='select * from forum_comment where forum_id='.$_GET['id'];
$result=$db->query($sql);

$i=0;
while($row=$result->fetch_assoc()){
    $i++;
    //ดึงข้อมูลผู้แสดงความเห็น
    $sql='select * from user where id='.$row['owner_id'];
    $owner_data=$db->query($sql);
    $owner=$owner_data->fetch_assoc();
    echo "<h4>ความเห็นที่ ".$i."</h4>";
    echo "<p>".$row['detail']."</p>";
    echo "<p><i>โดย ".$owner['name']." ".$owner['surname']." @ ".$row['create_time']."</i></p>";

}


?>

<form action="?p=forum/save_comment&id=<?php echo $_GET['id']; ?>" method="post">
แสดงความเห็น <textarea class="form-control" name="detail">
</textarea>
<button type="submit" class="btn btn-primary">ตกลง</button>
</form>