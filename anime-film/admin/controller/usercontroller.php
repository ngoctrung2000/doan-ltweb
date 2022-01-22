<?php
$action =isset($_GET['action'])?$_GET['action']:'index';
$user=new usermodels();
if($action=='index')
{
	
    $data=$user->all();
     $dataAdmin=$user->allAdmin();
    include 'view/user/user.php';
}

if($action=='them'){
    $userloginID =$_POST['userloginID'];
    $usernamelogin=$_POST['usernamelogin'];
    $usermail=md5($_POST['userpasslogin']);
    $userpasslogin=$_POST['usermail'];
    
    $data=$user->insert($usernamelogin,$usermail,$userpasslogin);
    header('location: index.php?controller=usercontroller&action=index');
}

if ($action=='delete')
{
$email= isset($_GET['id'])?$_GET['id']:'';
    if($email !='')
        {
            $data=$user->delete($email);
            header('location: ./index.php?controller=usercontroller&action=index');
        }
    }

    if($action=='sua')
    {   
        $userloginID = isset($_GET['id'])?$_GET['id']:'';
        $data =$user->hiensua($userloginID);
        include 'view/user/usersua.php';
    }
    
    if ($action=='deleteAdmin')
{
$adminId= isset($_GET['id'])?$_GET['id']:'';
    if($adminId !='')
        {
            $data=$user->deleteAdmin($adminId);
            header('location: ./index.php?controller=usercontroller&action=index');
        }
    }
// if($action=='xulysua')
// {
//     $userloginID=$_POST['userloginID'];
//     $usernamelogin=$_POST['usernamelogin'];
//     $userpasslogin=$_POST['userpasslogin'];
//     $usermail=$_POST['usermail'];
//     $data=$user->suaUSER($userloginID,$usernamelogin,$userpasslogin,$usermail);
//     $data =$user->hiensua($userloginID);
//     header('location: ./index.php?controller=usercontroller&action=index');
    
    
    
// }
if($action=='search'){
    $search=$_POST['search'];
    $data=$user->search($search);
    $dataAdmin=$user->searchAdmin($search);
    include './view/user/user.php';
     //header('location: ./index.php?controller=filmcontroller&action=index');
}
if($action=='xulysua')
{
    $usernamelogin=$_POST['usernamelogin'];
    $userpasslogin=md5($_POST['userpasslogin']);
    $usermail=$_POST['usermail'];
    $data=$user->suaUSER($usernamelogin,$userpasslogin,$usermail);
    header('location: ./index.php?controller=usercontroller&action=index');
}

?>