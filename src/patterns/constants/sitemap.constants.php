<?
function getSitemapValues()
{
	global $LEVEL, $PAGES;

	return [
		"title" => getTextLine(
			"Карта сайта Кухни 365 [город_именительный]"
		),
		"description" => getTextLine("Карта сайта Кухни 365 [город_именительный]"),
		"breadCrumbs" => [
			getTextLine(
				"Интернет-магазин кухонь в [город_предложный]"
			) => $LEVEL
		],
		"data" => [
			1 => [
				"Интернет-магазин кухонь" => $LEVEL,
			],
			2 => [
				"Контакты" => $PAGES['contact'],
				"Политика обработки персональных данных" => $PAGES['policy'],
			],
			3 => getArrayForSitemap(getCategoriesParents()),
			4 => getArrayForSitemap(getCategoriesChildren()),
			5 => getArrayForSitemap(getAllProducts(), "name", "Кухня"),
		]
	];
}

function getArrayForSitemap($array, $name_folder = 'name_full', $prefix = false)
{
	$result = [];

	foreach ($array as $value) {
		$result[getNameForSitemapLine($prefix, $value[$name_folder])] = getLinkPage($value['folder'], "category");
	}

	return $result;
}

function getNameForSitemapLine($prefix, $name)
{
	return $prefix ? $prefix . " " .  $name : $name;
}
