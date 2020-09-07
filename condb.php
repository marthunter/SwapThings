<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "swapthings";
    $conn = new mysqli($server,$user,$password,$db_name);

    if($conn->connect_errno) {
        printf("ไม่สามารถเชื่อมต่อฐานข้อมูลได้",$conn->connect_error);
        exit();
    }

    mysqli_set_charset($conn,'utf8');
?>

<?php
    /*$condb = mysqli_connect("localhost","root","","swapthings") or die ("Error: " . 
    mysqli_error($condb));
    mysqli_query($condb, "SET NAMES 'utf8' ");
    error_reporting( error_reporting() & ~E_NOTICE );
    date_default_timezone_set('Asia/Bangkok');*/
?>