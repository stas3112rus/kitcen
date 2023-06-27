<?
function getMenuValues()
{
	global $LEVEL, $PAGES;

	return [
		"Главная" => $LEVEL,
		"Кухонные гарнитуры" => getLinkPage("kuhonnye-garnitury", "category"),
		"Цвета Кухонь" => getLinkPage("kuhni-po-cvetam", "category"),
		"Кухни по стоимости" => getLinkPage("kuhni-po-stoimosti", "category"),
		"Материалы фасадов" => getLinkPage("materialy-dlja-kuhon", "category"),
		"Формы кухонь" => getLinkPage("kuhni-po-formam", "category"),
		"Кухни по размерам" => getLinkPage("kuhni-po-razmeram", "category"),
		"Контакты" => $PAGES['contact'],
	];
}
