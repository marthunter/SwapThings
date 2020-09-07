<?php
include "condb.php";
if (isset($_POST)) {
    $users_name = $_POST['users_name'];
    $thingname = $_POST['thingname'];
    $gr_name = $_POST['gr_name'];
    $thingdetail = $_POST['thingdetail'];
    

    date_default_timezone_set('Asia/Bangkok');
    $date1 = date("Ymd_His");
    $numrand = (mt_rand());
    $thingimage = (isset($_POST['thingimage']) ? $_POST['thingimage'] : '');
    $upload = $_FILES['thingimage']['name'];
    if($upload !='') {
        $path = "image/things/";
        $type = strrchr($_FILES['thingimage']['name'],".");

        $newname = $numrand.$date1.$type;
        $path_copy = $path.$newname;
        $path_link="image/things/".$newname;

        move_uploaded_file($_FILES['thingimage']['tmp_name'], 
        $path_copy);
    }

    $sql ="INSERT INTO thing_list(users_name,thingname,thingtype,thingdetail,thingimage) VALUES
    ('$users_name','$thingname','$gr_name','$thingdetail','$newname')";
    $query = mysqli_query($conn,$sql);
    
    if ($query) {
        echo "<script type='text/javascript'>";
        echo "alert('เพิ่มรายการสิ่งของเรียบร้อยแล้ว');";
        echo "window.location = 'mainpage.php';";
        echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('ไม่สามารถเพิ่มรายการสิ่งของได้ กรุณาลองใหม่อีกครั้ง');";
        echo "window.location = 'form_add_things.php';";
        echo "</script>";
}
}    
exit();
mysqli_close($conn);
?>