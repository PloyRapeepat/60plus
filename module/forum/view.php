กระดานสนทนา<br>
<a href="?p=forum/new" class="btn btn-success">ตั้งหัวข้อใหม่</a>
<table class="table">
        <thead>
            <tr>
                <th>หัวข้อ</th>
                <th>โดย</th>
                <th>วันที่ตั้งกระทู้</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql='select * from forum order by create_time desc';
            $result=$db->query($sql);
            while($row=$result->fetch_assoc()){
                $sql='select * from user where id='.$row['owner_id'];
                $owner_data=$db->query($sql);
                $owner=$owner_data->fetch_assoc();
                echo "<tr>";
                    echo "<td><a href='?p=forum/read&id=".$row['id']."'>".$row['subject']."</a></td>";
                    echo "<td>".$owner['name'].' '.$owner['surname']."</td>";
                    echo "<td>".$row['create_time']."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
</table>