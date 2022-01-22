<?php
    var_dump($_POST);
    $txt_tenFilm = $_POST["txt_tenFilm"]?? false;
    $txt_hinhAnh = $_POST["txt_hinhAnh"]?? false;
    $txt_linkFilm = $_POST["txt_linkFilm"]?? false;
    function checkFilm($acount,$arrUsers=array()){
        $isExist=true;
        foreach ($arrUsers as $user){
            if($user["tenFilm"]==$acount){
                $isExist=false;
                // header("location: ../../pages/tables/userlist.php");
                
            }
            
        }
        return $isExist;
    }
    $json=file_get_contents('film.json');
    $jsonArray=json_decode($json,true);
    if($txt_tenFilm&&$txt_hinhAnh&&$txt_linkFilm&&checkFilm($txt_tenFilm,$jsonArray)){
    
       $Users_01 =array("tenFilm"=>$txt_tenFilm,"hinhAnh"=>$txt_hinhAnh,"URLFilm"=>$txt_linkFilm);
       $jsonArray[]=$Users_01;
       file_put_contents('film.Json',json_encode($jsonArray));
       header("location: ../../pages/tables/filmlist.php");

   }else{
       echo'<h1>Khong Hop le</h1>';
   }
?>