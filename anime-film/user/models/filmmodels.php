<?php
class filmmodels extends Db{

	function all()
	{
		return $this->selectQuery('SELECT * FROM `film`');
	}



}



?>