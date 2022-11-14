<h3>คุยกับผู้ใช้</h3>
<?php
    $sql='select distinct sender_id from chat order by send_time desc';
    $result=$db->query($sql);

    while($row=$result->fetch_assoc()){
        $sql='select * from user where id='.$row['sender_id'];
    $user_data=$db->query($sql);
    $user=$user_data->fetch_assoc();

        echo "<div class='row'>
        <div class='col lg-6 md-12'>";
        echo '<a href="?p=chat/view&r_id='.$row['sender_id'].'">';
        echo $user['name'].' '.$user['surname'];
        echo '</a>';
        echo "</div></div>";
    }