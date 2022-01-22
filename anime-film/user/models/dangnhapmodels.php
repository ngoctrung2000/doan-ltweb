<?php
class dangnhapmodels extends Db{

    function getdangnhap($userEmail,$userpass)
	{
        $sql="SELECT * FROM `qluser` WHERE emaiqluer='$?' and passqluer='$?'";
		$arr=[$userEmail,$userpass];
		return $this->selectQuery($sql, $arr);
        
	}

    function dangnhap($adminEmail,$adminpass)
    {
        $sql='SELECT * FROM `qluser` WHERE `emai`=? and `passqluer`=?';
    	$arr=[$adminEmail,$adminpass];
    	return $this->updateQuery($sql, $arr);
    }	




}


?>