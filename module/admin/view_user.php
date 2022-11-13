

<?php
$sql='select * from user where id="'.$_GET['id'].'"';
$result=$db->query($sql);
$data=$result->fetch_assoc();

?>


<?php echo $data['name']; ?>

<select name="user_type" class="form-control">
    <option value="admin" <?php echo $data['user_type']=='admin'?'selected':''; ?>>ผู้ดูแลระบบ</option>
    <option value="doctor" <?php echo $data['user_type']=='doctor'?'selected':''; ?>>หมอ</option>
    <option value="member" <?php echo $data['user_type']=='member'?'selected':''; ?>>สมาชิก</option>
</select>