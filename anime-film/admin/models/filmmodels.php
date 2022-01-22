<?php
class filmmodels extends Db{

	function all()
	{
		return $this->selectQuery('SELECT * FROM `film`');
	}

	function insert($FilmID,$tenchitietFilm,$mieuTaFilm,$anhFilm,$urlFilm)
    { 
      $sql="INSERT INTO film(FilmID, tenchitietFilm, mieuTaFilm,anhFilm, urlFilm ) VALUES (?,?,?,?,?)";
      $a=[$FilmID,$tenchitietFilm,$mieuTaFilm,$anhFilm,$urlFilm];
      return $this->updateQuery($sql, $a);
    }

    function delete($FilmID)
    { 
      // $sql="delete from dianhac where id_dianhac=?";
      $sql="DELETE FROM `film` WHERE `FilmID`=?";
      $arr=[$FilmID];
      return $this->updateQuery($sql, $arr);
    }

    function hiensua($FilmID)
    {
    
    $sql="select * from film where FilmID='$_GET[id]'";
     $a=[$FilmID];
     return $this->selectQuery($sql, $a);
    }

    function search($kw)
    {
        $sql="select * from film where tenchitietFilm like ?";
        $arr=["%$kw%"];
        return $this->selectQuery($sql, $arr);
    }
    
    function suaFILM($tenchitietFilm,$mieuTaFilm,$anhFilm,$urlFilm)
    {
    //     $sql="UPDATE `user` SET`usernamelogin`='".$usernamelogin."',`userpasslogin`='".$userpasslogin."',`usermail`='".$usermail."' 
    //     WHERE userloginID='$_GET[id]'";
    $sql="UPDATE `film` SET `tenchitietFilm`='".$tenchitietFilm."',`mieuTaFilm`='".$mieuTaFilm."',`anhFilm`='".$anhFilm."',`urlFilm`='".$urlFilm."' 
    WHERE `FilmID`='$_GET[id]'";
    // WHERE `FilmID`='".$FilmID."'";
    // WHERE userloginID='$_GET[id]'";
    $a=[$tenchitietFilm,$mieuTaFilm,$anhFilm,$urlFilm];
    return $this->updateQuery($sql, $a);

    }

}



?>