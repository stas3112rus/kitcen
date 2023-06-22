<?php
	function getAllTexts()
	{
		$sql = "SELECT 
		*
		FROM `texts`"; 
		
		return getAllRowsFromDataBase($sql);
	}