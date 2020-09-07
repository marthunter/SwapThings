<?php
include "condb.php";
if (isset($_POST)) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $telephone = $_POST['telephone'];
    $address = $_POST['address'];
    $province = $_POST['province'];
    $postcode = $_POST['postcode'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    date_default_timezone_set('Asia/Bangkok');
    $date1 = date("Ymd_His");
    $numrand = (mt_rand());
    $imageprofile = (isset($_POST['imageprofile']) ? $_POST['imageprofile'] : '');
    $upload = $_FILES['imageprofile']['name'];
    if($upload !='') {
        $path = "image/profileuser/";
        $type = strrchr($_FILES['imageprofile']['name'],".");

        $newname = $numrand.$date1.$type;
        $path_copy = $path.$newname;
        $path_link="image/profileuser/".$newname;

        move_uploaded_file($_FILES['imageprofile']['tmp_name'], 
        $path_copy);
    }

    $check = "SELECT email, username FROM users WHERE username = '$username'
        OR email = '$email'";
    $result1 = mysqli_query($conn, $check) or die(mysqli_error());
    $num = mysqli_num_rows($result1);

    if($num > 0) {
        echo "<script>";
        echo "alert('E-mail หรือ Username ซ้ำ กรุณาลองใหม่อีกครั้ง!!!!!')";
        echo "</script>";
    } else {

    $sql ="INSERT INTO users(firstname,lastname,telephone,u_address,province,postcode,email,
        username,u_password,imageprofile) VALUES
    ('$firstname','$lastname','$telephone','$address','$province','$postcode','$email','$username','$password','$newname')";
    $query = mysqli_query($conn,$sql);
    }
    if ($query) {
        echo "<script type='text/javascript'>";
        echo "alert('สมัครสมาชิกเรียบร้อยแล้ว');";
        echo "window.location = 'index.php';";
        echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('ไม่สามารถสมัครสมาชิกได้ กรุณาลองใหม่อีกครั้ง');";
        echo "window.location = 'register.php';";
        echo "</script>";
}
}    
exit();
mysqli_close($conn);
?>