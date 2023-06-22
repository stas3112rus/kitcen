<?
	function getDepartmentWithCityByID($id){
		$sql = "SELECT 
		*
		FROM `departments`
		JOIN cities ON departments.city_ref = cities.id
		WHERE departments.id = '$id'
		";
		return getOneRowFromDataBase($sql);
	}