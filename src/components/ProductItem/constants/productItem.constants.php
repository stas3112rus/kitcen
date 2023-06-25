<?
function getProductItemValues($product = [])
{
	return [
		"link" => getProductLink($product),
		"title" => getProductTitle($product),
		"img" => [
			"imgLink" => getProductImgLink($product),
			"imgAlt" => getProductImgAlt($product),
		],
		"priceBlock" => [
			"price" => getPriceString($product),
			"priceValue" => "руб.",
			"priceFor" => "за п.м. погонный метр",
		],
		"infoBlock" => [
			"material" => "Материалы:",
			"fittings" => "Фурнитура:",
			"tabletop" => "Столешница:",
		],
		"buttonsBlock" => [
			"design" => "Заказать дизайн проект",
			"credit" => "Купить в рассрочку",
			"more" => "Подробнее",			
		]
	];
}


function getProductLink($product)
{
	global $LEVEL;
	return "$LEVEL/product/$product[folder]/";
}

function getProductImgLink($product)
{
	return  getProductLink($product) . "$product[photos_cover].jpg";
}

function getProductImgAlt($product)
{
	return "Кухня $product[name] артикль $product[vendor_code] цена от $product[price]";
}

function getProductTitle($product)
{
	return "Кухня $product[name]";
}

function getPriceString($product)
{
	return number_format($product['price'], 0, '', ' ');
}
