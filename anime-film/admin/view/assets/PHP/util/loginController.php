<?php
var_dump($_POST);

$txt_userName = $_POST["txt_userName"]?? false;
$txt_taiKhoan = $_POST["txt_email"]?? false;
$txt_password = $_POST["txt_password"]?? false;
$txt_login=$_POST["txt_login"]??false;
$txt_dangKy=$_POST["txt_dangKy"]??false;
function checkAcount($acount,$arrUsers=array()){
    $isExist=true;
    foreach ($arrUsers as $user){
        if($user["taiKhoan"]==$acount){
            $isExist=false;
            // header("location: ../../pages/tables/userlist.php");
            
        }
        
    }
    return $isExist;
}
$json=file_get_contents('user.json');
$jsonArray=json_decode($json,true);

if($txt_login=="login"&&$txt_taiKhoan&&$txt_password){
    foreach($jsonArray as $users){
        if ($users["taiKhoan"]==$txt_taiKhoan&&$users["password"]==$txt_password) {
            echo 'Dang nhap thanh cong';
            echo '<p>'.$txt_login.'</p>';
            exit();
        }
    }
    echo 'tai khoang hoac mat khau ko dung';
};
if($txt_dangKy=="register"){
    if ($txt_taiKhoan&&$txt_password&&$txt_userName&&checkAcount($txt_taiKhoan,$jsonArray)) {
        $Users_01 =array("userName"=>$txt_userName,"taiKhoan"=>$txt_taiKhoan,"password"=>$txt_password);
        $jsonArray[]=$Users_01;
        file_put_contents('user.Json',json_encode($jsonArray));
        echo 'Dang ky thanh cong';
        exit();
    }else{
        echo'dang ky khong thanh cong';
    }
    
}




// if(){
    
   
//     $Users_01 =array("userName"=>$txt_userName,"taiKhoan"=>$txt_taiKhoan,"password"=>$txt_password);
//     $jsonArray[]=$Users_01;
//     file_put_contents('user.Json',json_encode($jsonArray));
//     header("location: ../../pages/tables/userlist.php");
// }else{
//     echo '<h1>Không hợp lệ</h1>';
// }

?>