<?php
$action =isset($_GET['action'])?$_GET['action']:'index';
$dangnhap = new dangnhapmodels();
if ($action=='index')
{
    include 'view/dangnhap/login.php';
}

if($action=='dangnhap')
{ 
    if(!isset($_SESSION)){
        session_start();
        $adminEmail=$_POST['adminEmail'];
        $adminpass=md5($_POST['adminpass']);

        $data=$dangnhap->dangnhap($adminEmail,$adminpass);

        if($data<0){
           
            header('location: ./index.php?controller=dangnhapcontroller&action=index' );

        }else{
            // echo '<script>alert("dang nhap sai")</script>';
            header('location: ./index.php?controller=usercontroller&action=index' );

        }
    }

}




?>