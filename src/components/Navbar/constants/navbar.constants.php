<?
function getMenuValues()
{
	global $LEVEL;

	return [
		"Главная" => $LEVEL,
		"Кухонные гарнитуры" => "$LEVEL/category/kuhonnye-garnitury/",
		"Цвета Кухонь" => "$LEVEL/category/kuhni-po-cvetam/",
		"Кухни по стоимости" => "$LEVEL/category/kuhni-po-stoimosti/",
		"Материалы фасадов" => "$LEVEL/category/materialy-dlja-kuhon/",
		"Формы кухонь" => "$LEVEL/category/kuhni-po-formam/",
		"Кухни по размерам" => "$LEVEL/category/kuhni-po-razmeram/",
		"Контакты" => "$LEVEL/category/kontakty.php/",
	];
}
