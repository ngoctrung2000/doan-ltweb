<?php
$action =isset($_GET['action'])?$_GET['action']:'index';
$dangky=new dangnhapmodels();
if ($action=='index')
{
    include 'view/dangky/dangky.php';
}

if($action=='dangky'){
    // $userloginID =$_POST['userloginID'];
    $adminEmail=$_POST['adminEmail'];
    $adminpass=md5($_POST['adminpass']);
    
    // $data=$user->insert($usernamelogin,$usermail,$userpasslogin);
    $arr=[$adminEmail,$adminpass];
    $data=$dangky->insert($adminEmail,$adminpass);
    header('location: index.php?controller=dangkycontroller&action=index');
}



?>