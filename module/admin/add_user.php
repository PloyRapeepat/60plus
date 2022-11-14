
</br>
<h1>เพิ่มข้อมูลสมาชิก</h1>
</br>
<form action="?p=admin/insert_user" method="post">
<div class="row g-3">
  <div class="col">
    ชื่อผู้ใช้
    <input type="text" class="form-control"  aria-label="name" name="username">
  </div>
  <div class="col">
    อีเมล
    <input type="text" class="form-control"  aria-label="E-mail" name="email">
  </div>
</div><br/><br/>
<div class="row g-3">
  <div class="col">
    <label for="inputPassword" class="col-sm-2 col-form-label">รหัสผ่าน</label>
    <input type="password" class="form-control" id="inputPassword" name="password">
  </div>
  <div class="col">
  <label for="inputPassword" class="col-sm-2 col-form-label">ประเภทผู้ใช้</label>
  <select name="user_type" class="form-control">
    <option value="admin">ผู้ดูแลระบบ</option>
    <option value="user">สมาชิก</option>
</select>
  </div>
</div><br/><br/>
<div class="row g-3">
  <div class="col">
    ชื่อ
    <input type="text" class="form-control"  aria-label="name" name="name">
  </div>
  <div class="col">
    สกุล
    <input type="text" class="form-control"  aria-label="E-mail" name="surname">
  </div>
</div><br/><br/>

<div class="row g-3">
  <div class="col">
    <label for="dob" class="col-sm-2 col-form-label">วันเกิด</label>
    <input type="date" class="form-control" id="dob" name="dob" value="<?php echo date('Y-m-d'); ?>">
  </div>
</div>
  <div class="mb-3 form-check">
  </div>
  <button type="submit" class="btn btn-primary">ยืนยัน</button>
</form>
