<?
function getCategoriesParentsValues($nameFull)
{
	global $DEPARTMENT, $LEVEL;

	return [
		"description" => getTextLine("Купить $nameFull по самым выгодным ценам в интернет-магазине Кухни 365. Широкий выбор материалов и фасадов. В каталоге кухонь на заказ можно ознакомиться с ценами и фотографиями. Купить $nameFull в кредит или рассрочку в [город_предложный]  ($DEPARTMENT[work_time]) "),
		"breadCrumbs" => [
			getTextLine(
				"Интернет-магазин кухонь в [город_предложный]"
			) => $LEVEL
		]
	];
}
