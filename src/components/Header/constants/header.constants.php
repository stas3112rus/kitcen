<?
function getHeaderValues()
{
	global $LEVEL;

	return [
		"logoLink" => $LEVEL,
		"logoAlt" => getTextLine("Интернет-магазина Кухни 365 - [город_именительный]"),
		"slogan" => "Кухни и кухонные гарнитуры на совесть, как для себя, с 1999 года!",
		"callBack" => "Заказать обратный звонок",
		"button" => "Рассчитать цену",
	];
}
