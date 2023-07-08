<?
function getCategoriesChildrenValues()
{
	global $DEPARTMENT, $LEVEL, $CATEGORY;

	return [
		"title" => $CATEGORY["title"],
		"description" => getTextLine("Купить $CATEGORY[name_full] по самым выгодным ценам в интернет-магазине Кухни 365. Широкий выбор материалов и фасадов. В каталоге кухонь на заказ можно ознакомиться с ценами и фотографиями. Купить $CATEGORY[name_full] в кредит или рассрочку в [город_предложный]  ($DEPARTMENT[work_time]) "),
		"breadCrumbs" => [
			getTextLine(
				"Кухни на заказ в [город_предложный]"
			) => $LEVEL,
			$CATEGORY['parents_name_full'] => getLinkPage($CATEGORY['parents_folder'], "category"),
		],
		"per_page" => 28

	];
}
