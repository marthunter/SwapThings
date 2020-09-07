<?php
session_start();


     //สร้างเงื่อนไขตรวจสอบสิทธิ์ผู้ใช้ทั่วไป
     //if(!isset($_SESSION)) 
    // { 
     //    session_start(); 
         
     //    echo $User;
     //    unset($_SESSION['User']);
     //    session_destroy();
   //  } 



?>
<?php 
 

//   echo "<pre>";
//  print_r($_SESSION);
//   echo "</pre>";
    include('condb.php'); 
     //สร้างตัวแปรจาก session
    //$user_id = $_SESSION["user_id"];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COmpatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwapThings</title>
    <link rel="icon" href="image/icon.png" type="image/png" sizes="16x16">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Kanit);
      body{
        font-size: 19px;
		font-family: 'Kanit', sans-serif;
		background: #F8F8FF;
      }
	  td dd { width: 70px; overflow-y: hidden; }
	  td dl { width: 60px; overflow-y: hidden; }
	  strong {font-size: 20px; text-align: center;}
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<style>

</style>
<body>

