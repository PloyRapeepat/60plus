
</br>
<h1>เพิ่มข้อมูลสมาชิก</h1>
</br>
<form action="?p=insert_user">
<div class="row g-3">
  <div class="col">
    ชื่อผู้ใช้
    <input type="text" class="form-control"  aria-label="name">
  </div>
  <div class="col">
    อีเมล
    <input type="text" class="form-control"  aria-label="E-mail">
  </div>
</div><br/><br/>
<div class="row g-3">
  <div class="col">
    <label for="inputPassword" class="col-sm-2 col-form-label">รหัสผ่าน</label>
    <input type="password" class="form-control" id="inputPassword">
  </div>
  <div class="col">
  <label for="inputPassword" class="col-sm-2 col-form-label">ประเภทผู้ใช้</label>
  <select name="user_type" class="form-control">
    <option value="admin">ผู้ดูแลระบบ</option>
    <option value="doctor">หมอ</option>
    <option value="member">สมาชิก</option>
</select>
  </div>
</div>
  <div class="mb-3 form-check">
  </div>
  <button type="submit" class="btn btn-primary">ยืนยัน</button>
</form>
