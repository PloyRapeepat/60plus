<h3>คุยกับผู้ดูแลระบบ</h3>
<form action="?p=chat/send&r_id=<?php echo $_GET['r_id']; ?>" method="post">

    <div class="input-group mb-3">
  <input type="text" class="form-control" name="message">
  <div class="input-group-append">
    <button class="btn btn-primary" type="button">ส่ง</button>
  </div>
</div>
</form>

<?php

$sql='select * from chat where (sender_id='.$_SESSION['user']['id'].' AND receiver_id= '.$_GET['r_id'].') or (sender_id='.$_GET['r_id'].'  AND receiver_id= '.$_SESSION['user']['id'].') order by send_time desc'; 

$result=$db->query($sql);
while($row=$result->fetch_assoc()){
    $sql='select * from user where id='.$row['sender_id'];
    $user_data=$db->query($sql);
    $user=$user_data->fetch_assoc();
    if($row['sender_id']==$_SESSION['user']['id']){
        echo '<p>';
        echo '<b>'.$user['name'].'</b> : ';
        echo $row['message'];
        echo '</p>';
    }else{
        echo '<p style="text-align:right">';
        echo $row['message'];
        echo ' : <b>'.$user['name'].'</b>';
        echo '</p>';
    }
}