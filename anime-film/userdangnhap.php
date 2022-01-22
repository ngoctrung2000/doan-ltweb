<?php

// include_once('trung.php');
// $ten=$_POST['txt_email'];
$u=$_POST['txt_email'];
$p=$_POST['txt_pass'];

$db=mysqli_connect("localhost","root","","ltweb");
$sql="SELECT * FROM `qluser` WHERE emaiqluer='$u' and passqluer='$p'";

$rs=mysqli_query($db,$sql);

if(mysqli_num_rows($rs)==1){
header("Location: index.php");
// echo"<h1>đăng nhập thành công</h1>";
}else{
//  echo "<script>alert('đăng nhập sai hoặc chưa đăng nhâp');</script>";
echo"<p >đăng nhập sai hoặc chưa đăng nhâp</p>";
}
?>