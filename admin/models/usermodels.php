<?php
class usermodels extends Db{

	function all()
	{
		return $this->selectQuery("SELECT * FROM `user`");
	}

  function allAdmin()
	{
		return $this->selectQuery("SELECT * FROM `admin`");
	}
  function insert($usernamelogin,$userpasslogin,$usermail)
  { 
    $sql="INSERT INTO `user`(`userloginID`, `usernamelogin`, `userpasslogin`, `usermail`) VALUES (NULL,?,?,?)";
    $a=[$usernamelogin,$userpasslogin,$usermail];
    return $this->updateQuery($sql, $a);
  }

  function delete($userloginID)
  { 
    $sql="DELETE FROM `user` where userloginID=?";
    $arr=[$userloginID];
    return $this->updateQuery($sql, $arr);
  }
  function deleteAdmin($adminID)
  { 
    $sql="DELETE FROM `admin` where adminID=?";
    $arr=[$adminID];
    return $this->updateQuery($sql, $arr);
  }

  function hiensua($userloginID)
    {
    
    $sql="SELECT * FROM `user` WHERE userloginID='$_GET[id]'";
     $a=[$userloginID];
     return $this->selectQuery($sql, $a);
    }

    // function suaUSER($userloginID,$usernamelogin,$userpasslogin,$usermail)
    // {
        
    //     $sql="UPDATE `user` SET`usernamelogin`='".$usernamelogin."',`userpasslogin`='".$userpasslogin."',`usermail`='".$usermail."' 
    //     WHERE `userloginID`='".$userloginID."'";
    //   //   $sql="UPDATE `user` SET`usernamelogin`='".$usernamelogin."',`userpasslogin`='".$userpasslogin."',`usermail`='".$usermail."' 
    //   //  ";
    //     $a=[$userloginID,$usernamelogin,$userpasslogin,$usermail];
    //     return $this->updateQuery($sql, $a);
    // }
    
    function suaUSER($usernamelogin,$userpasslogin,$usermail)
    {
        // $sql = "UPDATE nhac SET tennhac='".$tennhac."',video='".$video."',tentacgia='".$tentacgia."' WHERE id_nhac='$_GET[id]'";
        $sql="UPDATE `user` SET`usernamelogin`='".$usernamelogin."',`userpasslogin`='".$userpasslogin."',`usermail`='".$usermail."' 
        WHERE userloginID='$_GET[id]'";
        $a=[$usernamelogin,$userpasslogin,$usermail];
        return $this->updateQuery($sql, $a);

    }
    function search($kw)
    {
        $sql="select * from user where usermail like ?";
        $arr=["%$kw%"];
        return $this->selectQuery($sql, $arr);
    }
    function searchAdmin($kw)
    {
        $sql="select * from admin where adminEmail like ?";
        $arr=["%$kw%"];
        return $this->selectQuery($sql, $arr);
    }
}
?>