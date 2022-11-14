ข่าว<br>
<?php 
if(!empty($_SESSION['user'])&&$_SESSION['user']['user_type']=='admin'){
    echo '<a href="?p=news/new" class="btn btn-success">ประกาศข่าวใหม่</a>';
}
?>
<table class="table">
        <thead>
            <tr>
                <th>หัวข้อ</th>
                <th>โดย</th>
                <th>วันที่ประกาศ</th>
                <th>อ่านแล้ว</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql='select * from news order by time_create desc';
            $result=$db->query($sql);
            while($row=$result->fetch_assoc()){
                $sql='select * from user where id='.$row['owner_id'];
                $owner_data=$db->query($sql);
                $owner=$owner_data->fetch_assoc();
                echo "<tr>";
                    echo "<td><a href='?p=news/read&id=".$row['id']."'>".$row['subject']."</a></td>";
                    echo "<td>".$owner['name'].' '.$owner['surname']."</td>";
                    echo "<td>".$row['time_create']."</td>";
                    echo "<td>".$row['visitor']." ครั้ง</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
</table>