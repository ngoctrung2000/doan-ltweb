<?php
var_dump($_POST);

$txt_userName = $_POST["txt_userName"]?? false;
$txt_taiKhoan = $_POST["txt_taiKhoan"]?? false;
$txt_password = $_POST["txt_password"]?? false;
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



if($txt_userName&&$txt_taiKhoan&&checkAcount($txt_taiKhoan,$jsonArray)){
    
   
    $Users_01 =array("userName"=>$txt_userName,"taiKhoan"=>$txt_taiKhoan,"password"=>$txt_password);
    $jsonArray[]=$Users_01;
    file_put_contents('user.Json',json_encode($jsonArray));
    header("location: ../../pages/tables/userlist.php");
}else{
    echo '<h1>Không hợp lệ</h1>';
}

?>