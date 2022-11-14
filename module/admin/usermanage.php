<form action="?p=usermanage" method="post">
    <input type="text" name="q" class="form-control"> 
    <button type="submit" class="btn btn-primary">ค้นหา</button>
    <a href="?p=admin/add_user" class="btn btn-success">เพิ่มผู้ใช้</a>
</form>
<table class="table">
    <thead>
        <tr>
            <th>รหัสผู้ใช้</th>
            <th>ชื่อผู้ใช้</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>อีเมล</th>
            <th>จัดการ</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(empty($_POST['q'])){
            $sql='select * from user order by id asc';
        }else{
            $sql='select * from user where name like "%'.$_POST['q'].'%" OR surname like "%'.$_POST['q'].'%" OR email like "%'.$_POST['q'].'%" order by id asc';
        }
        $result=$db->query($sql);

        while($row=$result->fetch_assoc()){
            echo '<tr>';
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['username'].'</td>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td>'.$row['surname'].'</td>';
            echo '<td>'.$row['email'].'</td>';
            echo '<td>
                    <a href="?p=chat/view&r_id='.$row['id'].'">C</a>
                    <a href="?p=admin/view_user&id='.$row['id'].'">E</a>
                    <a href="?p=delete_user&id='.$row['id'].'" onclick="return confirm(\'ลบ?\')">X</a>
                  </td>';
            echo '</tr>';
        }

        ?>

    </tbody>
</table>