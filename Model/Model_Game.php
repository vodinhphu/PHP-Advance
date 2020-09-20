<?php
class Model_Game extends Database
{


	function insertPro($sqlInsert, $paramType, $paramArray)
	{
		return $this->insert($sqlInsert, $paramType, $paramArray);
	}
	function getGame()
	{
		return $this->getTable('game');
	}

	function getnGame($n)
	{
		return $this->selectQuery('select * from game where quantity_available > 0 limit 0, '.$n.'');
	}

	function detail($product_id)
	{
		$sql="select * from game where product_id=? ";
		$arr= array($product_id);
		$data= parent::selectQuery($sql, $arr);
		if (Count($data)>0)
			return $data[0];
		return 0;
	}

}