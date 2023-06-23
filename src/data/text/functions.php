<?php
function getAllTexts()
{
	$sql = "SELECT 
		*
		FROM `texts`";

	return getAllRowsFromDataBase($sql);
}

function getGlobalTextsAndTypeText($text_type)
{
	$sql = "SELECT 
		*
		FROM `texts`
		WHERE `text_type_ref` = '1' OR `text_type_ref` = '$text_type'
		";

	return getAllRowsFromDataBase($sql);
}
