<?php
include('header.php');

$userlevel = $_SESSION['userlevel'];
if ($userlevel !='member') {
        Header("Location: login.php");
}
?>
<body>
<?php   
    include('menu.php');
    // $act = (isset($_GET['act']) ? $_GET['act'] : '');
    // if($act==)
    include('banner.php');
    include('list_things.php');  
    include('footer.php');  
?>
</body>
