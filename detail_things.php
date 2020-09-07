<?php

        include('condb.php');
    $thi_li_id = $_GET['thi_li_id'];
    $sql = "SELECT * FROM thing_list as t
    INNER JOIN thing_group as g ON t.thingtype=g.gr_name
    WHERE t.thi_li_id=$thi_li_id";
    $result = mysqli_query($conn, $sql) or die("Error in query : $sql " .
    mysqli_error());
    $row = mysqli_fetch_array($result);
    extract($row);

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<style>
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

input[type=button]#report {
  background-color: #234561;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-right: 2%;
}

input[type=button]#want {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-right: 2%;
}

input[type=button]:hover {
  background-color: #c82333;
}

input[type=button]#report:hover {
  background-color: #123456;
}

input[type=button]#want:hover {
  background-color: #45a049;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=button], input[type=button]#report, input[type=button]#want  {
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
<h3 id="textaddthing">รายละเอียดสิ่งของ</h3>
<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <img src="image/things/<?php echo $row['thingimage'];?>" width="100%">
        </div>
        <div class="col-md-8 col-xs-12">
            <h2>ชื่อสิ่งของ : <?php echo $row['thingname'];?></h2>
            <p>ชื่อผู้ประกาศ : <?php echo $row['users_name'];?></p>
            <p>วันที่ประกาศ : <?php echo $row['thingdate'];?></p>
            <p>หมวดหมู่ : <?php echo $row['thingtype'];?></p>
            <p>คำอธิบาย : <?php echo $row['thingdetail'];?></p>
            <?php 
            if ($row['thingtype'] == 'แลกเปลี่ยน') {
              echo "สิ่งของที่ต้องการแลกเปลี่ยนด้วย : $swapwith"; 
              } 
              
            else if ($row['thingtype'] == 'ซื้อ-ขาย') {
              echo "ราคา : $price บาท"; 
              }  
            ?>
            
            <br><br>
            <div class="row">
    <a href="mainpage.php"><input type="button" value="ย้อนกลับ"></a>
    <a href="#"><input type="button" id="report" value="รายงานผู้ดูแลระบบ"></a>
    <?php
       if ($row['thingtype'] == 'ซื้อ-ขาย') {
          echo '<a href="mainpage.php"><input type="button" id="want" value="ขอซื้อ-ขาย"></a>';
       }

       else if ($row['thingtype'] == 'แลกเปลี่ยน') {
          echo '<a href="login.php"><input type="button" id="want" value="ขอแลกเปลี่ยน"></a>';
       }

       else {
          echo '<a href="register.php"><input type="button" id="want" value="ขอบริจาค"></a>';
       }
    ?>
   
    </div>
        </div>
    </div>
</div>
<br><br>
</body>
</html>