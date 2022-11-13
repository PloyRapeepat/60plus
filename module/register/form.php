
</br>
<h1>สมัครสมาชิก</h1>
</br>
<form action="?p=register/save_register" method="post">
<div class="row g-3">
  <div class="col">
    ชื่อผู้ใช้
    <input type="text" class="form-control"  aria-label="name" name="username" required>
  </div>
  <div class="col">
    อีเมล
    <input type="eamil" class="form-control"  aria-label="E-mail" name="email" required>
  </div>
</div><br/><br/>
<div class="row g-3">
  <div class="col">
    <label for="inputPassword" class="col-sm-2 col-form-label">รหัสผ่าน</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <div class="col">
  <label for="inputPassword" class="col-sm-2 col-form-label">ยืนยันรหัสผ่าน</label>
    <input type="password" class="form-control" id="pass" name="pass" required>
  </div>
</div><br/><br/>
<div class="row g-3">
  <div class="col">
    ชื่อ
    <input type="text" class="form-control"  aria-label="name" name="name" required>
  </div>
  <div class="col">
    นามสกุล
    <input type="eamil" class="form-control"  aria-label="surname" name="surname" required>
  </div>
</div><br/><br/>
<div class="row g-3">
  <div class="col">
    วันเกิด
    <input type="date" class="form-control"  aria-label="dob" name="dob" value="<?php echo date('Y-m-d'); ?>" required>
  </div>
</div>
  <div class="mb-3 form-check">
  </div>
  <button type="submit" class="btn btn-primary">ยืนยัน</button>
</form>
