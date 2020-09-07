<?php   
    include('condb.php');
    include('header.php');
    include('menu.php');
?>

<?php
  $query = "SELECT * FROM thing_list WHERE thingtype = 'บริจาค' ORDER BY thi_li_id DESC" or die("Error: " .
  mysqli_error());
  $result = mysqli_query($conn, $query);
?>
<div>
<h3 id="textaddthing">หมวดหมู่สิ่งของ : บริจาค<a id="addthing" href="add_things.php" ><button class="btn btn-success">+ เพิ่มสิ่งของ</button></a></h3>
<br><br>
<div class="container">
<div class="row">
<?php while($row = mysqli_fetch_array($result)) { ?>
  <div class="col-sm-6 col-md-3">
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
</div><br>
</div>

<?php
  include('footer.php');
?>