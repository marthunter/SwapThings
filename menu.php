<?php

           $User = $_SESSION['User'];
       
  $query = "SELECT * FROM thing_group ORDER BY gr_id ASC" or die("Error: " .
  mysqli_error());
  $result = mysqli_query($conn, $query);
?>

<style>
  #dropmenu, #searchmenu, #namemenu {
    margin-top: 28px;
  }

</style>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a id="logo" href="mainpage.php"><img alt="Logo" src="image/createweb/logost.png" width="120"/></a></li>
        <li id="dropmenu" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          หมวดหมู่ <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="list_swap_things.php">แลกเปลี่ยน</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="list_donate_things.php">บริจาค</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="list_sale_things.php">ซื้อ-ขาย</a></li>
          </ul>
        </li>
      </ul>
      <form id="searchmenu" class="navbar-form navbar-left" method="GET">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="search" required>
        </div>
        <button type="submit" name="act" value="q" class="btn btn-success">ค้นหา</button>
      </form>
      <ul id="namemenu" class="nav navbar-nav navbar-right">
        <li><a><b><?php echo $User; ?></b></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          เมนู<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">ติดต่อเรา</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">ออกจากระบบ</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</body>