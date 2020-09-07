<?php
  $query = "SELECT * FROM thing_list ORDER BY thi_li_id DESC" or die("Error: " .
  mysqli_error());
  $result = mysqli_query($conn, $query);
?>
<style>
  .thumbnail {
    height: 400px;
  }

</style>
<div>
<h3 id="textaddthing">สิ่งของทั้งหมด<a id="addthing" href="add_things.php" ><button class="btn btn-success">+ เพิ่มสิ่งของ</button></a></h3>
  </div>
<br><br>
<div class="container">
<div class="row">
<?php while($row = mysqli_fetch_array($result)) { ?>
  <div class="col-sm-6 col-md-3 col-xs-6">
    <div class="thumbnail">
      <img src="image/things/<?php echo $row['thingimage'];?>" width="100%">
      <div class="caption">
        <h3><?php echo $row['thingname'];?></h3>
        <h7><b>หมวดหมู่ : </b><?php echo $row['thingtype'];?></h7>
        <p><b>คำอธิบาย : </b><?php echo $row['thingdetail'];?></p>
        <p><a href="detail.php?thi_li_id=<?php echo $row['thi_li_id'];?>" class="btn btn-primary" role="button">รายละเอียด</a></p>
      </div>
    </div>
  </div>
<?php } ?>
</div>
</div>
