<?php   
    include('condb.php');
    include('header.php');
    include('menu.php');
?>
<?php
// query ข้อมูลจากตาราง:
$query = "SELECT * FROM thing_group" or die("Error:" . mysqli_error());
//เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($conn, $query);
?>

<h3 id="textaddthing">เพิ่มสิ่งของ</h3>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
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
  background-color: #c82333
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
  <form method="POST" action="add_donate_db.php" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="thingname">ชื่อสิ่งของ : </label>
      </div>
      <div class="col-75">
        <input type="text" id="thingname" name="thingname" placeholder="กรุณาพิมพ์ชื่อสิ่งของ" required autofocus>
      </div>
    </div>
      <input type="hidden" name="gr_name" value="บริจาค"/>
    <div class="row">
      <div class="col-25">
        <label for="thingdetail">รายละเอียด : </label>
      </div>
      <div class="col-75">
        <textarea id="thingdetail" name="thingdetail" placeholder="เขียนอะไรสักหน่อย....." style="height:200px" maxlength="300" required></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="thingimage">รูปภาพ : </label>
      </div>
      <div class="col-75">
        <input type="file" name="thingimage" id="thingimage" accept="image/*" required>
      </div>
    </div>
    <input type="hidden" name="users_name" value="<?php echo $User; ?>"/>
    <div class="row">
    <a href="add_things.php"><input type="button" value="ย้อนกลับ"></a>
      <input type="submit" value="  ยืนยัน  ">
    </div>
  </form>
</div>
</body>
</html><br>
<?php
  include('footer.php');
?>