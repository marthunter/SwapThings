<?php   
    include('condb.php');
    include('header.php');
?>
<?php
// query ข้อมูลจากตาราง:
$query = "SELECT * FROM users" or die("Error:" . mysqli_error());
//เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($conn, $query);
?>
<h3 id="textaddthing">สมัครสมาชิก</h3>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text],input[type=email],input[type=password], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-right: 2%;
}

input[type=button] {
  background-color: #dc3546;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

input[type=button]:hover {
  background-color: #c82333;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit], input[type=button], input[type=file]  {
    width: 100%;
    margin-top: 5px;
    margin-right: 0%;
  }
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=button]  {
    width: 100%;
    margin-top: 10px;
    margin-right: 0%;
  }
}
</style>
</head>
<body>

<div class="container">
  <form method="POST" action="form_add_user_db.php" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">ชื่อจริง : </label>
      </div>
      <div class="col-75">
        <input type="text" id="firstname" name="firstname" placeholder="ชื่อจริง" required autofocus>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">นามสกุล : </label>
      </div>
      <div class="col-75">
        <input type="text" id="lastname" name="lastname" placeholder="นามสกุล" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">เบอร์โทรศัพท์ : </label>
      </div>
      <div class="col-75">
        <input type="text" id="telephone" name="telephone" placeholder="เบอร์โทรศัพท์" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">ที่อยู่ : </label>
      </div>
      <div class="col-75">
        <textarea id="address" name="address" placeholder="ที่อยู่ผู้ใช้งาน....." style="height:200px" required></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">จังหวัด : </label>
      </div>
      <div class="col-75">
      <select name="province" required>
      <option value="" selected>--------- เลือกจังหวัด ---------</option>
      <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
      <option value="กระบี่">กระบี่ </option>
      <option value="กาญจนบุรี">กาญจนบุรี </option>
      <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
      <option value="กำแพงเพชร">กำแพงเพชร </option>
      <option value="ขอนแก่น">ขอนแก่น</option>
      <option value="จันทบุรี">จันทบุรี</option>
      <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
      <option value="ชัยนาท">ชัยนาท </option>
      <option value="ชัยภูมิ">ชัยภูมิ </option>
      <option value="ชุมพร">ชุมพร </option>
      <option value="ชลบุรี">ชลบุรี </option>
      <option value="เชียงใหม่">เชียงใหม่ </option>
      <option value="เชียงราย">เชียงราย </option>
      <option value="ตรัง">ตรัง </option>
      <option value="ตราด">ตราด </option>
      <option value="ตาก">ตาก </option>
      <option value="นครนายก">นครนายก </option>
      <option value="นครปฐม">นครปฐม </option>
      <option value="นครพนม">นครพนม </option>
      <option value="นครราชสีมา">นครราชสีมา </option>
      <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
      <option value="นครสวรรค์">นครสวรรค์ </option>
      <option value="นราธิวาส">นราธิวาส </option>
      <option value="น่าน">น่าน </option>
      <option value="นนทบุรี">นนทบุรี </option>
      <option value="บึงกาฬ">บึงกาฬ</option>
      <option value="บุรีรัมย์">บุรีรัมย์</option>
      <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
      <option value="ปทุมธานี">ปทุมธานี </option>
      <option value="ปราจีนบุรี">ปราจีนบุรี </option>
      <option value="ปัตตานี">ปัตตานี </option>
      <option value="พะเยา">พะเยา </option>
      <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
      <option value="พังงา">พังงา </option>
      <option value="พิจิตร">พิจิตร </option>
      <option value="พิษณุโลก">พิษณุโลก </option>
      <option value="เพชรบุรี">เพชรบุรี </option>
      <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
      <option value="แพร่">แพร่ </option>
      <option value="พัทลุง">พัทลุง </option>
      <option value="ภูเก็ต">ภูเก็ต </option>
      <option value="มหาสารคาม">มหาสารคาม </option>
      <option value="มุกดาหาร">มุกดาหาร </option>
      <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
      <option value="ยโสธร">ยโสธร </option>
      <option value="ยะลา">ยะลา </option>
      <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
      <option value="ระนอง">ระนอง </option>
      <option value="ระยอง">ระยอง </option>
      <option value="ราชบุรี">ราชบุรี</option>
      <option value="ลพบุรี">ลพบุรี </option>
      <option value="ลำปาง">ลำปาง </option>
      <option value="ลำพูน">ลำพูน </option>
      <option value="เลย">เลย </option>
      <option value="ศรีสะเกษ">ศรีสะเกษ</option>
      <option value="สกลนคร">สกลนคร</option>
      <option value="สงขลา">สงขลา </option>
      <option value="สมุทรสาคร">สมุทรสาคร </option>
      <option value="สมุทรปราการ">สมุทรปราการ </option>
      <option value="สมุทรสงคราม">สมุทรสงคราม </option>
      <option value="สระแก้ว">สระแก้ว </option>
      <option value="สระบุรี">สระบุรี </option>
      <option value="สิงห์บุรี">สิงห์บุรี </option>
      <option value="สุโขทัย">สุโขทัย </option>
      <option value="สุพรรณบุรี">สุพรรณบุรี </option>
      <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
      <option value="สุรินทร์">สุรินทร์ </option>
      <option value="สตูล">สตูล </option>
      <option value="หนองคาย">หนองคาย </option>
      <option value="หนองบัวลำภู">หนองบัวลำภู </option>
      <option value="อำนาจเจริญ">อำนาจเจริญ </option>
      <option value="อุดรธานี">อุดรธานี </option>
      <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
      <option value="อุทัยธานี">อุทัยธานี </option>
      <option value="อุบลราชธานี">อุบลราชธานี</option>
      <option value="อ่างทอง">อ่างทอง </option>
</select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">รหัสไปรษณีย์ : </label>
      </div>
      <div class="col-75">
        <input type="text" id="postcode" name="postcode" maxlength="5" placeholder="รหัสไปรษณีย์" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">E-mail : </label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" placeholder="E-mail" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Username : </label>
      </div>
      <div class="col-75">
        <input type="text" id="username" name="username" placeholder="4 - 15 ตัวอักษร" minlength="4" maxlength="15" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Password : </label>
      </div>
      <div class="col-75">
        <input type="password" id="password" name="password" placeholder="Password"  required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">รูปประจำตัว : </label>
      </div>
      <div class="col-75">
        <input type="file" name="imageprofile" id="imageprofile" accept="image/*"  required>
      </div>
    </div>
    <div class="row">
    <a href="index.php"><input type="button" value="ย้อนกลับ"></a>
      <input type="submit" value="สมัครสมาชิก">
    </div>
  </form>
</div>
</body>
</html><br>
<?php
  include('footer.php');
?>


