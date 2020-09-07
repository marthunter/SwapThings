<?php 
session_start();

        if(isset($_POST['username'])){
				//connection
                  include("condb.php");
        //รับค่า user & u_password
                  //$user_id = $_POST['user_id'];
                  $username = $_POST['username'];
                  $u_password = ($_POST['u_password']);
                  $userlevel = ($_POST)['userlevel'];

				//query 
                  $sql="SELECT * FROM users 
                  WHERE username='".$username."' 
                  AND u_password='".$u_password."' ";

                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["user_id"] = $row["user_id"];
                      $_SESSION["User"] = $row["firstname"]." ".$row["lastname"];
                      $_SESSION["userlevel"] = $row["userlevel"];

                      if($_SESSION["userlevel"]=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
                            echo 'แอดมินหรอ';
                        // Header("Location: admin_page.php");

                      }

                      if ($_SESSION["userlevel"]=="member"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
                            // echo 'ไปคุยกับรากมะม่วง';
                        Header("Location: mainpage.php?userid=<?php echo $user_id; ?>");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" Username หรือ Password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: login.php"); //user & u_password incorrect back to login again

        }
?>

