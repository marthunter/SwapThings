<?php
include('header.php');
?>

<style>
  input[type=button] {
  background-color: #dc3546;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=button]:hover {
  background-color: #c82333
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=button]  {
    width: 100%;
    margin-top: 10px;
    margin-right: 0%;
  }
}

</style>

<body>
<?php   
    include('menu.php');?>
<div>
<h3 id="textaddthing">เลือกหมวดหมู่ที่ต้องการ</h3>
  </div>
<br><br>
<div class="container">
<div class="row">

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="image/createweb/sale.jpg" width="100%">
      <div class="caption">
      <center>
        <h3>ซื้อ-ขาย</h3>
        <p><a href="add_sale.php" class="btn btn-primary" role="button">เพิ่มสิ่งของ</a></p>
        </center>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="image/createweb/swap.jpg" width="100%">
      <div class="caption">
      <center>
        <h3>แลกเปลี่ยน</h3>
        <p><a href="add_swap.php" class="btn btn-primary" role="button">เพิ่มสิ่งของ</a></p>
        </center>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="image/createweb/donate.jpg" width="100%">
      <div class="caption">
      <center>
        <h3>บริจาค</h3>
        <p><a href="add_donate.php" class="btn btn-primary" role="button">เพิ่มสิ่งของ</a></p>
        </center>
      </div>
    </div>
  </div>
  <div class="row">
    <a href="mainpage.php"><input type="button" value="ย้อนกลับ"></a>
    </div>
</div>
</div>
<?php
include('footer.php');  
?>