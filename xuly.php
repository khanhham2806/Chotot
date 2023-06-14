<?php
    include("connect.php");
    global $link;
    $link = mysqli_connect('localhost', 'root', '','baitaplon');
	if(isset($_POST['submit'])&& $_POST["username"]!='' && $_POST["password"]!=''){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $sql= "SELECT * FROM tbl_user WHERE username='$username'";
       
        $old= mysqli_query($link,$sql);
        $password=md5($password);
        
       if( mysqli_num_rows($old) > 0 ) {
           header("location:register.php");
       }
        else{
            $sql="INSERT INTO tbl_user (username , password) VALUES ('$username','$password')";
            mysqli_query($link,$sql);
            // echo mysqli_num_rows($old);
            // echo "sql=[$sql]";exit();
            echo "da dang ki";
        }
    }
    else{
        header("location:register.php");
    }
?>