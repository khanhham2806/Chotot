<?php
// print_r($_GET);exit();
// print_r($_POST).exit();
// print_r($_REQUEST);exit();
session_start();
include("connect.php");
global $link;
$link = mysqli_connect('localhost', 'root', '','baitaplon');
if(isset($_POST['login'])&& $_POST["username"]!='' && $_POST["password"]!=''){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql= "SELECT * FROM tbl_user WHERE username='$username'";
    $query = mysqli_query($link,"SELECT username, password FROM tbl_user WHERE username='$username'");
    $old= mysqli_query($link,$sql);
    $password=md5($password);
    
   if( mysqli_num_rows($old) == 0 ) {
       echo "ten dang nhap khong ton tai";
       exit;
   }
   $row = mysqli_fetch_array($query);
   if ($password != $row['password']) {
    echo "Mật khẩu không đúng";
    exit;
}
$_SESSION['username']=$username;
header('location: index.php');
    // $sql="INSERT INTO tbl_user (username , password) VALUES ('$username','$password')";
    // mysqli_query($link,$sql);
    // // echo mysqli_num_rows($old);
    // // echo "sql=[$sql]";exit();
    // echo "da dang ki";
}

// print_r($sql);exit();
// print_r($data).exit();
// $ret = exec_update($sql);
// print_r($ret);exit();
?>