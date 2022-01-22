<?php
class dangnhapmodels extends Db{

    function getdangnhap($adminEmail,$adminpass)
	{
        $sql='SELECT * FROM `admin` WHERE `adminEmail`=? and `adminpass`=?';
		$arr=[$adminEmail,$adminpass];
		return $this->selectQuery($sql, $arr);
        
	}

    function dangnhap($adminEmail,$adminpass)
    {
        $sql='SELECT * FROM `admin` WHERE `adminEmail`=? and `adminpass`=?';
    	$arr=[$adminEmail,$adminpass];
    	return $this->updateQuery($sql, $arr);
    }	


    function insert($adminEmail,$adminpass)
	{
		// $sql="insert into username (email, matkhau,tenkh, sodienthoai) values (?,?,?,?)";
        $sql="INSERT INTO `admin`(`adminID`, `adminEmail`, `adminpass`) VALUES (NULL,?,?)";
		$arr=[$adminEmail,$adminpass];
		return $this->updateQuery($sql, $arr);
	}

}




?>