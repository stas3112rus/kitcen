<?
function getMenuValues()
{
	global $LEVEL;

	return [
		"Главная" => $LEVEL,
		"Кухонные гарнитуры" => "$LEVEL/categories/kuhonnye-garnitury/",
		"Цвета Кухонь" => "$LEVEL/categories/kuhni-po-cvetam/",
		"Кухни по стоимости" => "$LEVEL/categories/kuhni-po-stoimosti/",
		"Материалы фасадов" => "$LEVEL/categories/materialy-dlja-kuhon/",
		"Формы кухонь" => "$LEVEL/categories/kuhni-po-formam/",
		"Кухни по размерам" => "$LEVEL/categories/kuhni-po-razmeram/",
		"Контакты" => "$LEVEL/categories/kontakty.php/",
	];
}
